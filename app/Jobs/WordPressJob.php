<?php

namespace App\Jobs;

use App\Jobs\Store\StoreJobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WordPressJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 4;

    public $backoff = [30, 45, 60];

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        for ($page = 1; $page <= 2; $page++) {
            $response = Http::job()->get('/search', [
                'query' => config('job-fetch.wordpress_search_query'),
                'page' => $page,
                'num_pages' => 20,
                'date_posted' => 'week',
            ]);
        }
        if ($response->ok()) {
            StoreJobs::dispatch($response->json(), 'WordPress');
        } else {
            Log::error($response['message']);
        }

    }
}
