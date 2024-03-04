<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\DB;
use App\Jobs\Store\AddSubscriberToMailerLite;

class EmailSubscription extends Component
{
    #[Rule('required', message:'Please enter a email', as:'Email')]
    #[Rule('email')]
    #[Rule('unique:subscribers,email')]
    public $email;

    public function save()
    {
        $this->validate();
        dd($this->email);
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
