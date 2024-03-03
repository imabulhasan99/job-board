<?php

namespace App\Http\Controllers\Frontned;

use App\Models\JobListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class JobController extends Controller
{
    public function index()
    {
        $totalJobs = JobListing::count();
        $jobs = Cache::remember('jobs', 60 * 1, function () {
            return JobListing::orderBy("posted_at", "desc")->paginate(100);
        });
        return view('frontend.index', ['jobs' => $jobs, 'totalJobs' => $totalJobs]);
    }

   
    public function show($uuid)
    {
      
        $cacheKey = 'job_' . $uuid;
        $job = Cache::remember($cacheKey, 60 * 2, function () use ($uuid) {
            return JobListing::where('uuid', $uuid)->first();
        });
        if (!$job) {
            abort(404);
        }
        $relatedJobs = Cache::remember($cacheKey.'_related', 60 * 1, function () use ($job) {
            return JobListing::where('job_category', 'LIKE', '%' . $job->job_category . '%')
                            ->inRandomOrder()
                            ->take(5)
                            ->get();
        });
    
        return view('frontend.job-single', ['job' => $job, 'relatedJobs' => $relatedJobs]);
    }
}
