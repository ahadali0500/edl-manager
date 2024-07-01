<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    
    public function faq()
    {
        return view('users.faq');
    }

    public function contact()
    {
        return view('users.contact');
    }

    
}
