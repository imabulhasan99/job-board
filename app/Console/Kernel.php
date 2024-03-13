<?php

namespace App\Console;

use App\Jobs\VueJsJob;
use App\Jobs\LaravelJob;
use App\Jobs\SymfonyJob;
use App\Jobs\WordPressJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        /*  $schedule->job(LaravelJob::class)->daily();
         $schedule->job(WordPressJob::class)->daily();
         $schedule->job(SymfonyJob::class)->daily(); */
       /*  $schedule->job(LaravelJob::class);
        $schedule->job(WordPressJob::class);
        $schedule->job(SymfonyJob::class); */
        $schedule->job(VueJsJob::class);

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
