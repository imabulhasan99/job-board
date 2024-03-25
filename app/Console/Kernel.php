<?php

namespace App\Console;

use App\Jobs\AspJob;
use App\Jobs\LaravelJob;
use App\Jobs\NodeJSJob;
use App\Jobs\PaythonJob;
use App\Jobs\ReactJob;
use App\Jobs\SymfonyJob;
use App\Jobs\VueJsJob;
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
        $schedule->job(LaravelJob::class)->days([1, 6])->withoutOverlapping();
        $schedule->job(WordPressJob::class)->days([1, 6])->withoutOverlapping();
        $schedule->job(SymfonyJob::class)->days([1, 6])->withoutOverlapping();
        $schedule->job(VueJsJob::class)->days([1, 6])->withoutOverlapping();
        $schedule->job(ReactJob::class)->days([1, 6])->withoutOverlapping();
        $schedule->job(NodeJSJob::class)->days([1, 6])->withoutOverlapping();
        $schedule->job(PaythonJob::class)->days([1, 6])->withoutOverlapping();
        $schedule->job(AspJob::class)->days([1, 6])->withoutOverlapping();
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
