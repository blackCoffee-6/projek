<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Tanggapan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user = User::all();
        $fup = FUP::all();
        $tanggapan = FUP::Where('tanggapan', '=', 'perlu')->count();
        if($fup){
            $fup = FUP::all()->count();
        }
        // $kajian = ::all()->count();
        // $perubahan = ::all()->count();
        // $perubahan = ::all()->count();
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        return view('home', compact('user','fup', 'tanggapan', 'role'));
    }
}
