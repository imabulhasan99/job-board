<?php

namespace App\Livewire;

use App\Jobs\Verify\EmailVerifyJob;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EmailSubscription extends Component
{
    #[Validate]
    public $email;

    protected function rules()
    {
        return [
            'email' => ['required', 'email'],
        ];
    }

    public function save()
    {
        $this->validate();
        EmailVerifyJob::dispatchSync($this->email);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.email-subscription');
    }
}
