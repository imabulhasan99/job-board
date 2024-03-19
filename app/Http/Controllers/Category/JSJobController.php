<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Services\JSJobService;

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
