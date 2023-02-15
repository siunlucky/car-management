<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\Rental;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {

            $now = Carbon::now();

            // Get rentals that are scheduled to start or end
            $rentals = Rental::where(function ($query) use ($now) {
                $query->where('status', 'approved')
                    ->where('start_date', '<=', $now);
            })
                ->orWhere(function ($query) use ($now) {
                    $query->where('status', 'in Use')
                        ->where('end_date', '<=', $now);
                })
                ->get();

            foreach ($rentals as $rental) {
                if ($rental->start_date <= $now && $rental->status === 'approved') {
                    $rental->status = 'in Use';
                    $rental->car->status = 'unavailable';
                    $rental->driver->status = 'on-going';
                } elseif ($rental->end_date <= $now && $rental->status === 'in Use') {
                    $rental->status = 'completed';
                    $rental->car->status = 'available';
                    $rental->driver->status = 'ready';
                }

                $rental->save();
                $rental->car->save();
                $rental->driver->save();
            }
        })->everyMinute();
    }


    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
