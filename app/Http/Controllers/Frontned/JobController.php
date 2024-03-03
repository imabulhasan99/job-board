<?php

namespace App\Http\Controllers\Frontned;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
}
