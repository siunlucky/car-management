<?php

namespace App\Exports;

use App\Models\Rental;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class RentalExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Rental::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Car Name',
            'Application Name',
            'Application Datetime',
            'Status',
            'Destination',
            'Description',
            'Approved By Superior',
            'Approved By Head',
            'Rejected By',
            'Driver Name',
            'Start Date',
            'End Date',
            'Return Date',
        ];
    }
    public function map($rental): array
    {
        return [
            $rental->id,
            $rental->car->name_car, // Get the name of the related car
            $rental->userApplication->name,
            $rental->application_datetime,
            $rental->status,
            $rental->office->name_office,
            $rental->description,
            ($rental->approval_superior_id) ? $rental->userApprovalSuperior->name : null,
            ($rental->approval_head_id) ? $rental->userApprovalHead->name : null,
            ($rental->decline_user_id) ? $rental->userDecline->name : null,
            $rental->driver->name_driver,
            $rental->start_date,
            $rental->end_date,
            $rental->return_date,
        ];
    }


    public function styles($sheet)
    {
        $sheet->getStyle('A1:N1')->applyFromArray([
            'font' => [
                'bold' => true,
            ]
        ]);
    }
}
