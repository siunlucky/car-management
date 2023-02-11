<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Office;
use App\Models\Rental;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Common\Type;

class ManageRentalController extends Controller
{

    public function dashboard()
    {
        return view('pages.dashboard.dashboard', [
            'rentals' => Rental::where('application_user_id', auth()->user()->id)->get(),

        ]);
    }

    public function history()
    {
        return view('pages.history.history', [
            'rentals' => Rental::where('application_user_id', auth()->user()->id)->get(),

        ]);
    }

    public function allRental()
    {
        return view('pages.rental-list.all-rental', [
            'rentals' => Rental::orderBy('created_at', 'desc')->get(),

        ]);
    }

    public function rentalRequest()
    {
        return view('pages.rental-list.rental-request', [
            'rentals' => Rental::where('status', 'Waiting For Approval')->where((auth()->user()->role == 'superior') ? 'approval_superior_id' : 'approval_head_id', null)->get(),

        ]);
    }

    public function rentalDetail(Rental $rental)
    {
        return view('pages.rental-list.detail-rental', [
            'rental' => $rental,
        ]);
    }

    public function activeRental()
    {
        return view('pages.rental-list.active-rental', [
            'rentals' => Rental::where('status', 'Approved')->get(),


        ]);
    }

    public function cancelledRental()
    {
        return view('pages.rental-list.cancelled-rental', [
            'rentals' => Rental::where('status', 'Cancelled')->get(),
        ]);
    }

    public function completedRental()
    {
        return view('pages.rental-list.complete-rental', [
            'rentals' => Rental::where('status', 'Completed')->get(),
        ]);
    }




    public function approving(Rental $rental)
    {

        if (auth()->user()->role === 'superior') {
            Rental::where('id', $rental->id)->update([
                'approval_superior_id' => auth()->user()->id,
            ]);
        } else if (auth()->user()->role === 'head') {
            Rental::where('id', $rental->id)->update([
                'approval_head_id' => auth()->user()->id,
            ]);
        }

        $rental = Rental::find($rental->id);

        if ($rental->approval_superior_id && $rental->approval_head_id) {
            Rental::where('id', $rental->id)->update([
                'status' => 'Approved',
            ]);

            Driver::where('id', $rental->driver_id)->update([
                'status' => 'on-going'
            ]);

            Car::where('id', $rental->car_id)->update([
                'status' => 'unavailable'
            ]);

            Alert::success('Success', 'Request has been approved');
            return redirect()->back()->with('success', 'Data updated successfully!');
        }

        Alert::success('Success', 'Request has been approved');
        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    public function declining(Rental $rental)
    {
        Rental::where('id', $rental->id)->update([
            'decline_user_id' => auth()->user()->id,
            'status' => 'Cancelled',
        ]);

        Alert::success('Success', 'Request has been rejected');
        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    public function completing(Rental $rental)
    {
        Rental::where('id', $rental->id)->update([
            'status' => 'Completed',
            'return_date' => now()
        ]);

        Driver::where('id', $rental->driver_id)->update([
            'status' => 'ready'
        ]);

        Car::where('id', $rental->car_id)->update([
            'status' => 'available'
        ]);


        Alert::success('Success', 'Car has been returned');
        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    public function export()

    {
        $rentals = Rental::all();
        $writer = WriterEntityFactory::createXLSXWriter();
        $writer->openToBrowser('rentals.xlsx');
        $singleRow = WriterEntityFactory::createRow(['id', 'car_id', 'application_user_id', 'application_datetime', 'status', 'destination', 'description', 'approval_superior_id', 'approval_head_id', 'decline_user_id', 'driver_id', 'start_date', 'end_date', 'return_date', 'created_at']);
        $writer->addRow($singleRow);

        foreach ($rentals as $rental) {
            $row = WriterEntityFactory::createRow([$rental->id, $rental->application_user_id, $rental->application_datetime, $rental->status, $rental->destination, $rental->description, $rental->approval_superior_id, $rental->approval_head_id, $rental->decline_user_id, $rental->driver_id, $rental->start_date, $rental->end_date, $rental->return_date, $rental->created_at]);
            $writer->addRow($row);
        }

        $writer->close();


        return redirect()->back()->download('rentals.xlsx');
    }
}
