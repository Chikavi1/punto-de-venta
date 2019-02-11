<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $now = new \DateTime();
        
        return view('home')->with(compact('now'));
    }
    public function ticket(){
        $now = new \DateTime();
        
        return view('tickets')->with(compact('now'));
    }
    public function devoluciones(){
        return view('devoluciones.index');
    }

    public function profile(){
        return view('profile');
    }
}
