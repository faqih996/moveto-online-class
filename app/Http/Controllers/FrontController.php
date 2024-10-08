<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function details(Course $course){
        return view('front.details', compact('course'));
    }

    public function checkout(){
        return view('front.checkout');
    }

    public function checkout_store(){
        return view('front.checkout');
    }
}
