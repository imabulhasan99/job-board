<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\JobListing;
use Illuminate\Support\Facades\Cache;

class HomeFeed extends Component
{

    public function render()
    {
        $totalJobs = JobListing::count();
        $jobs = JobListing::orderBy('posted_at', 'desc')
            ->paginate(30);
        return view('livewire.home-feed',['jobs' => $jobs, 'totalJobs' => $totalJobs]);
    }
}
