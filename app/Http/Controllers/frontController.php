<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('Frontend.master');
    }
    public function home(){
        return view('Frontend.home');
    }
    public function services(){
        return view('Frontend.services');
    }
    public function aboutUs(){
        return view('Frontend.aboutUs');
    }
    public function pricing(){
        return view('Frontend.pricing');
    }
    public function contact(){
        return view('Frontend.contact');
    }
    public function serviceArea(){
        return view('Frontend.serviceArea');
    }
    public function team(){
        return view('Frontend.team');
    }

}
