<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function chatroom(){
        return view('frontend.chatroom');
    }

    public function drawing(){
        return view('frontend.drawing');
    }
}
