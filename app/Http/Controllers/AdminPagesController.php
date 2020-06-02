<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function rent(){
        return view('admin.rent_request');
    }

    public function add(){
        return view('admin.add');
    }

    public function list(){
        return view('admin.list_of_books');
    }

    public function penalties(){
        return view('admin.penalties');
    }
}
