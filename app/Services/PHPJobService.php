<?php

namespace App\Services;

use App\Models\JobListing;

class PHPJobService
{
    public static function getLaravelJob()
    {
        $totalJobs = JobListing::where('job_category', 'Laravel')->count();
        $jobs = JobListing::orderBy('posted_at', 'desc')->where('job_category', 'Laravel')->paginate(30);

        return [
            'totalJobs' => $totalJobs,
            'jobs' => $jobs,
        ];

    }

    public static function getWordpressJob()
    {
        $totalJobs = JobListing::where('job_category', 'WordPress')->count();
        $jobs = JobListing::orderBy('posted_at', 'desc')->where('job_category', 'WordPress')->paginate(30);

        return [
            'totalJobs' => $totalJobs,
            'jobs' => $jobs,
        ];
    }

    public static function getSymfonyJob()
    {
        $totalJobs = JobListing::where('job_category', 'Symfony')->count();
        $jobs = JobListing::orderBy('posted_at', 'desc')->where('job_category', 'Symfony')->paginate(30);

        return [
            'totalJobs' => $totalJobs,
            'jobs' => $jobs,
        ];
    }
}
