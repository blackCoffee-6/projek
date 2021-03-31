<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // $tanggapan = Tanggapan::all()->count();
        // $kajian = ::all()->count();
        // $perubahan = ::all()->count();
        // $perubahan = ::all()->count();
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        return view('home', compact('fup', 'role'));
    }
}
