<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('layouts.home');
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function contacts()
    {
        return view('layouts.contacts');
    }
}
