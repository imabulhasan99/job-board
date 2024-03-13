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

    public static function getReactJob()
    {
        $totalJobs = JobListing::where('job_category', 'React')->count();
        $jobs = JobListing::orderBy('posted_at', 'desc')->where('job_category', 'React')->paginate(30);

        return [
            'totalJobs' => $totalJobs,
            'jobs' => $jobs,
        ];
    }

    public static function getNodeJob()
    {
        $totalJobs = JobListing::where('job_category', 'NodeJS')->count();
        $jobs = JobListing::orderBy('posted_at', 'desc')->where('job_category', 'NodeJS')->paginate(30);

        return [
            'totalJobs' => $totalJobs,
            'jobs' => $jobs,
        ];
    }
}
