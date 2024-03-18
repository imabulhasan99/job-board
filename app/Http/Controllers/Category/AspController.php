<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AspController extends Controller
{
    public function asp()
    {
        return view('frontend.category.asp');
    }
}
