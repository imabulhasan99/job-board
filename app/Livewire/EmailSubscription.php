<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Jobs\Verify\EmailVerifyJob;
use Illuminate\Support\Facades\Session;
use App\Jobs\Store\AddSubscriberToMailerLite;
use Illuminate\Validation\Rule;

class EmailSubscription extends Component
{
    #[Validate]
    public $email;

    protected function rules()
    {
        return [
            'email' => ['required','email']
        ];
    }

    public function save()
    {
        $this->validate();
        EmailVerifyJob::dispatch($this->email);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.email-subscription');
    }
}