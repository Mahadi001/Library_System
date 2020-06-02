<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }

    public function books(){
        return view('user.books');
    }
}
