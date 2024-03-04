<?php

namespace App\Http\Controllers\Category;

use App\Models\JobListing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function laravel()
    {
        $totalJobs = JobListing::where('job_category', 'Laravel')->count();
        $jobs = JobListing::orderBy("posted_at", "desc")->where('job_category', 'Laravel')->paginate(30);
        return view('frontend.category.laravel', ['jobs' => $jobs, 'totalJobs' => $totalJobs]);
    }

    public function wordpress()
    {
        $totalJobs = JobListing::where('job_category', 'WordPress')->count();
        $jobs = JobListing::orderBy("posted_at", "desc")->where('job_category', 'WordPress')->paginate(30);
        return view('frontend.category.wordpress', ['jobs' => $jobs, 'totalJobs' => $totalJobs]);
    }

    public function symfony()
    {
        $totalJobs = JobListing::where('job_category', 'Symfony')->count();
        $jobs = JobListing::orderBy("posted_at", "desc")->where('job_category', 'Symfony')->paginate(30);
        return view('frontend.category.symfony', ['jobs' => $jobs, 'totalJobs' => $totalJobs]);
    }
}
