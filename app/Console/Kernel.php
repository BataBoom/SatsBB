<?php

namespace App\Console;

use App\Invoice;
use App\Jobs\IncomingPayments;
use App\Jobs\NotifyPaidInvoices;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

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
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        //$schedule->job(new )
        try {
            $schedule->job(new IncomingPayments(Invoice::notPaid(), Invoice::$_STATUS_NOT_PAID_2_HOURS, 2))->everyMinute();
            $schedule->job(new IncomingPayments(Invoice::expiredDay(), 24, Invoice::$_STATUS_NOT_PAID_DAY))->everyFiveMinutes();
            $schedule->job(new IncomingPayments(Invoice::expiredWeek(), 24 * 14, Invoice::$_STATUS_NOT_PAID_TWO_WEEKS))->hourly();
            $schedule->job(new NotifyPaidInvoices())->everyFiveMinutes();
        } catch (\Exception $ex) {
            Log::error($ex);
        }
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
