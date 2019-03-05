<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Ventas;
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
 
    public function ticket(){
        $now = new \DateTime();
        
        return view('tickets')->with(compact('now'));
    }

    public function profile(){
        $usuario = auth()->user();
        return view('profile')->with(compact('usuario'));
    }
     public function profile2(){
        $usuario = auth()->user();
        //dd($usuario);
        return view('profile2')->with(compact('usuario'));
    }
}
