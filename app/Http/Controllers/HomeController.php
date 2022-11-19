<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function about(){
        return view('frontEnd.about.about');

    }
    public function services(){
        return view('frontEnd.services.services');
    }
    public function portfolio(){
        return view('frontEnd.portfolio.portfolio');
    }
    public function team(){
        return view('frontEnd.team.team');
    }
    public  function blog(){
        return view('frontEnd.blog.blog');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
}
