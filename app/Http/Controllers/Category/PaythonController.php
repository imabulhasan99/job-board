<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaythonController extends Controller
{
    public function paython()
    {
        return view('frontend.category.paython');
    }
}
