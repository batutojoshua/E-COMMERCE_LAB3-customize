<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Show the user dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');  // User dashboard view
    }
}
