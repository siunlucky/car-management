<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Office;
use App\Models\Rental;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RentCarController extends Controller
{
    public function index()
    {
        return view('pages.rent-car.select-office', [
            'offices' => Office::all(),
            'cars' => Car::all()
        ]);
    }


    public function selectCar(Office $office)
    {
        $cars = Car::where('id_office', $office->id)->get();

        return view('pages.rent-car.select-car', [
            'cars' => $cars,
            'office' => $office
        ]);
    }

    public function formApplication(Car $car)
    {

        return view('pages.rent-car.form-application', [
            'car' => $car,
            'drivers' => Driver::where('status', 'ready')->get(),
            'offices' => Office::all()
        ]);
    }

    public function storeApplication(Request $request)
    {
        $validation = $request->validate([
            'car_id' => 'required',
            'application_user_id' => 'required',
            'destination' => 'required',
            'description' => 'required',
            'driver_id' => 'required',
            'start_date' => 'required|date|after:tomorrow',
            'end_date' => 'required|date|after:start_date',

        ]);

        $start_date = request('start_date');
        $end_date = request('end_date');
        $car_id = request('car_id');

        $overlapping_rentals = Rental::where('car_id', $car_id)
            ->where(function ($query) use ($start_date, $end_date) {
                $query->whereBetween('start_date', [$start_date, $end_date])
                    ->orWhereBetween('end_date', [$start_date, $end_date]);
            })->get();

        if ($overlapping_rentals->count() > 0) {
            // Return an error message to the user
            Alert::error('Failed!', 'The car is not available during the requested rental dates.');
            return redirect()->back()->with('error', 'The car is not available during the requested rental dates.');
        }


        Rental::create([
            'car_id' => $request->car_id,
            'application_user_id' => $request->application_user_id,
            'application_datetime' => now(),
            'status' => 'Waiting For Approval',
            'destination' => $request->destination,
            'description' => $request->description,
            'approval_superior_id' => null,
            'approval_head_id' => null,
            'decline_user_id' => null,
            'driver_id' => $request->driver_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'return_date' => null,
        ]);

        Alert::success('Success', 'Request has been created');
        return redirect()->route('history');
    }
}
