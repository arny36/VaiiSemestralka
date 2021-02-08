<?php

namespace App\Http\Controllers;

use App\Models\Huba;
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
        return view('home');
    }

    public function galeria()
    {
        $hubas=Huba::all();
        return view('huby/index');
    }

    public function mapaPreHubarov()
    {
        return view('mapaPreHubarov');
    }

    public function pridaj(){
        return view('huby/pridaj');
    }

    public function opravText()
    {
        return view('huby/opravObrazok');
    }

    public function opravObrazok()
    {
        return view('huby/opravText');
    }


}
