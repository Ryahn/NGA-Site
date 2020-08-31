<?php

namespace App\Console;

use App\Jobs\importClans;
use App\Jobs\importShips;
use App\Jobs\deleteOldUsers;
use App\Jobs\importShipStats;
use App\Jobs\importPlayerShipStats;
use App\Jobs\Test;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->job(new importShips)->dailyAt('00:00')->withoutOverlapping(30);
        $schedule->job(new importClans)->everyThirtyMinutes()->unlessBetween('23:00', '1:00')->withoutOverlapping(15);
        $schedule->job(new importPlayerShipStats)->everyFourHours()->unlessBetween('23:00', '1:00')->withoutOverlapping(15);
        $schedule->job(new importShipStats)->everyFourHours()->unlessBetween('23:00', '1:00')->withoutOverlapping(15);
        $schedule->job(new deleteOldUsers)->everyFourHours()->unlessBetween('23:00', '1:00')->withoutOverlapping(15);
        // $schedule->job(new Test)->everyFiveMinutes()->unlessBetween('23:00', '1:00')->withoutOverlapping(15);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
