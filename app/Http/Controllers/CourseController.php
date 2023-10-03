<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function aboutsection(){
        return view('frontend.pages.aboutsection');
    }

    public function product(){
        return view('frontend.pages.product');
    }

    public function productsection(){
        return view('frontend.pages.productsection');
    }

    public function slideshow(){
        return view('frontend.pages.slideshow');
    }

    public function admin(){
        return view('backend.layout.main');
    }


}
