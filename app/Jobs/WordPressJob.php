<?php

namespace App\Jobs;

use App\Jobs\Store\StoreJobs;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

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
        } 
        if ($response->status() == Response::HTTP_TOO_MANY_REQUESTS) {
            Log::error('Too many requests');
            Log::error('Api key: ' . $response->header('X-RapidAPI-Key'));
        } elseif ($response->status() == Response::HTTP_UNAUTHORIZED && strpos($response['message'], 'You are not subscribed to this API') !== false) {
            Log::error('You are not subscribed to this API');
            Log::error('Api key: ' . $response->header('X-RapidAPI-Key'));
        } else {
            Log::error('HTTP request returned status code ' . $response->status() . ': ' . $response['message']);
        }
        

    }
}
