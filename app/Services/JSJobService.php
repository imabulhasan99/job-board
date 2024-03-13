<?php

namespace App\Services;

use App\Models\JobListing;

class JSJobService
{
    public static function getVueJob()
    {
        $totalJobs = JobListing::where('job_category', 'Vue')->count();
        $jobs = JobListing::orderBy('posted_at', 'desc')->where('job_category', 'Vue')->paginate(30);

        return [
            'totalJobs' => $totalJobs,
            'jobs' => $jobs,
        ];
    }
}
