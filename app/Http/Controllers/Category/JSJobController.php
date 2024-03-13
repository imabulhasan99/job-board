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
        $reactJobs = JSJobService::getReactJob();

        return view('frontend.category.react', $reactJobs);
    }

    public function node()
    {
        $nodeJobs = JSJobService::getNodeJob();

        return view('frontend.category.node', $nodeJobs);
    }
}

