<?php

namespace App\Http\Controllers\Frontned;

use App\Models\JobListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::orderBy("posted_at","desc")->paginate(100);
        return view('frontend.index', ['jobs' => $jobs]);
    }

   
    public function show($uuid)
    {
        $job = JobListing::where('uuid', $uuid)->first();
        $relatedJobs = JobListing::where('job_category', 'LIKE', '%' . $job->job_category . '%')
                        ->inRandomOrder()
                        ->take(5)
                        ->get();
    
        return view('frontend.job-single', ['job' => $job, 'relatedJobs' => $relatedJobs]);
    }
}
