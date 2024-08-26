<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function newsnevent(){
        return view('frontend.newsnact');
    }

    public function campuslife(){
        return view('frontend.campuslife');
    }

    public function application(){
        return view('frontend.application');
    }

    public function academic(){
        return view('frontend.academic');
    }

    public function scholarship(){
        return view('frontend.scholarship');
    }
}
