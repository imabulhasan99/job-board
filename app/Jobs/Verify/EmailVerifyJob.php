<?php

namespace App\Jobs\Verify;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Jobs\Store\AddSubscriberToMailerLite;

class EmailVerifyJob
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 4;
    public $backoff = [30, 45, 60];
    /**
     * Create a new job instance.
     */
    public function __construct(public $email)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $subscriber =  DB::table('subscribers')
                        ->where('email', $this->email)
                        ->first();
        if($subscriber) {
            if($subscriber->disposable) {
                Session::flash('email-disposable', 'Sorry, disposable email addresses are not allowed.');
            }
        }

        if(!$subscriber || !$subscriber->disposable) {
            $email = explode('@', $this->email);
            $domain =  strtolower(end($email));
            $response = Http::emailverify()->get('/?domain='.$domain);
            if($response->json()['disposable']) {
                DB::table('subscribers')
                ->insert([
                    'email' => $this->email,
                    'disposable' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                Session::flash('email-disposable', 'Sorry, disposable email addresses are not allowed.');
            } else {
                AddSubscriberToMailerLite::dispatch($this->email);
            }
        }
        
    }
}
