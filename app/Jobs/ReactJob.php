<?php

namespace App\Jobs;

use App\Jobs\Store\StoreJobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ReactJob implements ShouldQueue
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
        $apiKey = DB::table('api_keys')->orderByDesc('request_count')->first();
        if ($apiKey->request_count > 0) {
            for ($page = 1; $page <= 2; $page++) {
                $response = Http::job()->get('/search', [
                    'query' => config('job-fetch.reactjs_search_query'),
                    'page' => $page,
                    'num_pages' => 20,
                    'date_posted' => 'week',
                    'api_key_id' => $apiKey->id,
                ]);
                if ($response->ok()) {
                    StoreJobs::dispatch($response->json(), 'React');

                    DB::table('api_keys')
                        ->where('id', $apiKey->id)
                        ->update(['request_count' => $response->header('X-RateLimit-Requests-Remaining')]);
                } else {
                    Log::error($response['message']);
                    DB::table('api_keys')
                    ->where('id', $apiKey->id)
                    ->update(['request_count' => $response->header('X-RateLimit-Requests-Remaining')]);
                    continue;
                }
            }
        }

    }
}
