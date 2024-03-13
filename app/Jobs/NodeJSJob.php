<?php

namespace App\Jobs;

use App\Jobs\Store\StoreJobs;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class NodeJSJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
                'query' => config('job-fetch.nodejs_search_query'),
                'page' => $page,
                'num_pages' => 20,
                'date_posted' => 'week',
            ]);
            if ($response->ok()) {
                StoreJobs::dispatch($response->json(), 'NodeJs');
            } else {
                Log::error($response['message']);
            }
        }

    
    }
}