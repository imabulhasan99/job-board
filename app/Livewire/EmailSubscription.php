<?php

namespace App\Livewire;

use App\Jobs\Store\AddSubscriberToMailerLite;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EmailSubscription extends Component
{
    #[Validate('required|email')]
    public $email;

    public function save()
    {
        dd($this->validate());
        $emailID = DB::table('subscribers')->insertGetId(
            [
                'email' => $this->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $email = DB::table('subscribers')->where('id', $emailID)->value('email');
        //AddSubscriberToMailerLite::dispatch($email);
        $this->reset();

    }

    public function render()
    {
        return view('livewire.email-subscription');
    }
}
