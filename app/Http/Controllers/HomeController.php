<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return $this->landing();
    }
        
    public function landing()
    {
        return view('page.home.landing');
    }

    public function configuracion()
    {
        return view('page.admin.configuracion');
    }
}
