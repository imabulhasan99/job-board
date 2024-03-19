<?php

namespace App\Livewire\Category;

use App\Models\JobListing;
use Livewire\Component;

class Symfony extends Component
{
    public $offset = 0;

    public $limit = 10;

    public $jobs = [];

    public $totalJobs;

    public function mount()
    {
        $this->totalJobs = JobListing::where('job_category', 'Symfony')->count();
        $this->loadMore();
    }

    public function render()
    {
        return view('livewire.category.symfony', [
            'jobs' => collect($this->jobs),
            'totalJobs' => $this->totalJobs,
        ]);
    }

    public function loadMore()
    {
        $Jobs = JobListing::orderBy('posted_at', 'desc')
            ->skip($this->offset)
            ->take($this->limit)
            ->where('job_category', 'Symfony')
            ->get()
            ->toArray();

        $this->jobs = array_merge($this->jobs, $Jobs);
        $this->offset += $this->limit;
    }
}
