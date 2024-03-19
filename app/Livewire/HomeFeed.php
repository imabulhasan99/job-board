<?php

namespace App\Livewire;

use App\Models\JobListing;
use Livewire\Component;

class HomeFeed extends Component
{
    public $offset = 0;

    public $limit = 10;

    public $jobs = [];

    public $totalJobs;

    public function mount()
    {
        $this->totalJobs = JobListing::count();
        $this->loadMore();
    }

    public function render()
    {
        return view('livewire.home-feed', ['jobs' => collect($this->jobs), 'totalJobs' => $this->totalJobs]);
    }

    public function loadMore()
    {
        $newJobs = JobListing::orderBy('posted_at', 'desc')
            ->skip($this->offset)
            ->take($this->limit)
            ->get()
            ->toArray();

        $this->jobs = array_merge($this->jobs, $newJobs);
        $this->offset += $this->limit;
    }

    public function check()
    {
        dd('oke');
    }
}
