<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function index(): View
    {
        return view('pages.index');
    }

    public function contactus(): View
    {
        return view('pages.contactus');
    }

    public function products(): View
    {
        return view('pages.products');
    }
}
