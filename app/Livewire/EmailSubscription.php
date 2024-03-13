<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Jobs\Store\AddSubscriberToMailerLite;
use Illuminate\Validation\Rule;

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
        //AddSubscriberToMailerLite::dispatch($email);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.email-subscription');
    }
}