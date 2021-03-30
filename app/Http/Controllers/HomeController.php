<?php

namespace App\Http\Controllers;

use App\FUP;
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
        $fup = FUP::all()->count();
        // $tanggapan = ::all()->count();
        // $kajian = ::all()->count();
        // $perubahan = ::all()->count();
        // $perubahan = ::all()->count();

        return view('home', compact('fup'));
    }
}
