<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * show the landing page
     * @return \illuminate\Http\Response
     */
    public function index()
    {
        return view('home.landing');
    }
}
