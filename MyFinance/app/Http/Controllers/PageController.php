<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the pricing page.
     *
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return view('pricing');
    }

    /**
     * Display the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}