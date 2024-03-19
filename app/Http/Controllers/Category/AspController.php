<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;

class AspController extends Controller
{
    public function asp()
    {
        return view('frontend.category.asp');
    }
}
