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

class SymfonyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $tries = 4; 
    public $backoff = [30,45,60];
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
        
        $response = Http::job()->get('/search', [
            'query' => config('job-fetch.symfony_search_query'),
            'page' => 1,
            'num_pages' => 20,
            'date_posted' => 'week'
        ]);
        if($response->ok()){
            StoreJobs::dispatch($response->json(), 'Symfony');
        } else {
            Log::error($response['message']);
        }
        
    
}
}
