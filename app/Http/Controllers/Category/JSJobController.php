<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Services\JSJobService;
use App\Services\PHPJobService;
use App\Http\Controllers\Controller;

class JSJobController extends Controller
{
    public function vue()
    {
        $vueJob = JSJobService::getVueJob();

        return view('frontend.category.vue', $vueJob);
    }

    public function react()
    {
        return view('frontend.category.react');
    }

    public function node()
    {
        return view('frontend.category.node');
    }
}

