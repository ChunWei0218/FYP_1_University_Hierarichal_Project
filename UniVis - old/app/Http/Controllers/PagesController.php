<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //public function index(){
        //$title = 'Welcome to Uninersity Visual Toolkit'
        //return view('index')->with('title', $title);
    //}

    public function index(){
        return view('index');
    }

    public function university(){
        return view('university_page');
    }

    public function faq(){
        return view('faq');
    }
}
