<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    //
    public function index(){
        return view('productsite.index');
    }
    public function AboutUs()
    {
        return view('productsite.aboutUs');
    } public function Holisolgroup()
    {
        return view('productsite.holisolGroup');
    }
     public function Productcatlog()
    {
        return view('productsite.productCatalouge');
    } 
    public function Casestudies()
    {
        return view('productsite.caseStudies');
    }
}
