<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::orderByDesc('id');
        return view('layouts.home', compact('trains'));
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
