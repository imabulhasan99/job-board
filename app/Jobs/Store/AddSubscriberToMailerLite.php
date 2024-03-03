<?php

namespace App\Jobs\Store;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddSubscriberToMailerLite implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 4; 
    public $backoff = [30,45,60];
    /**
     * Create a new job instance.
     */
    public function __construct(public $email)
    {
        
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $response = Http::mailerlite()->post('api/subscribers', [
            'email' => $this->email,
            'groups' => config('mailerlite.group_id'),
         ]);
    }
}
