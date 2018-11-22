<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view ('home');
    }
    public function getAbout(){
        return view ('about');
    }
    public function getPortfolio(){
        return view ('portfolio');
    }
    public function getTestimonials(){
        return view ('testimonials');
    }
public function getContact(){
        return view ('contact');
    }
    public function getCover(){
        return view ('cover');
    }
    public function getSplitscreen(){
        return view ('splitscreen');
    }
    public function getTest(){
        return view ('test');
    }
}
