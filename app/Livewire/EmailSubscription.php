<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Jobs\Store\AddSubscriberToMailerLite;

class EmailSubscription extends Component
{
    #[Validate]
    public $email;

    protected function rules()
    {
        return [
            'email' => ['required','email', Rule::unique('subscribers', 'email')]
        ];
    }

    public function save()
    {
        $this->validate();
        $emailID = DB::table('subscribers')->insertGetId(
            [
                'email' => $this->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $email = DB::table('subscribers')->where('id', $emailID)->value('email');
        $jobDispatch = AddSubscriberToMailerLite::dispatch($email);
        if($jobDispatch){
            Session::flash('email-success', 'Thanks for subscribing!');
        }
        $this->reset();
    }
    public function render()
    {
        return view('livewire.email-subscription');
    }
}