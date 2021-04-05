<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Tanggapan;
use App\User;
use App\FUB;
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
        
        if(strcasecmp(Auth::user()->role,'staff') == 0){
            $fup = FUP::where('user_id',Auth::user()->id)->get();
            $fubs = FUB::where('bidang_id',Auth::user()->bidang_id)->get();
            
            $fup_id = "";
            foreach($fubs as $fub){
                $fup_id .= $fub->fup_id.","; 
            }
            $arrFupId = explode(",",$fup_id);
            $tanggapan = FUP::whereIn('id', $arrFupId)->count();
        }
        else{
            $tanggapan = FUP::Where('tanggapan', '=', 'perlu')->count();
            $fup = FUP::all();
        }
        
        if($fup){
            $fup = $fup->count();
        }
        $usul = FUP::where('user_id',Auth::user()->id)->count();
        // $kajian = ::all()->count();
        // $perubahan = ::all()->count();
        // $perubahan = ::all()->count();
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        return view('home', compact('user','fup', 'tanggapan', 'role', 'usul'));
    }
}
