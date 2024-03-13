<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Services\PHPJobService;

class PHPJobController extends Controller
{
    public function laravel()
    {
        $laravelJob = PHPJobService::getLaravelJob();

        return view('frontend.category.laravel', $laravelJob);
    }

    public function wordpress()
    {
        $wordpressJob = PHPJobService::getWordpressJob();

        return view('frontend.category.wordpress', $wordpressJob);
    }

    public function symfony()
    {
        $symfonyJob = PHPJobService::getSymfonyJob();

        return view('frontend.category.symfony', $symfonyJob);
    }
}
