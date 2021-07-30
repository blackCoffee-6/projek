<?php

namespace App\Http\Controllers;

use App\Approval;
use App\FUP;
use App\Tanggapan;
use App\User;
use App\FUB;
use App\Kajian;
use App\KontrolPerubahan;
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
        $auth = Auth::check();
        $role = 'Staff';
        $usul = FUP::where('user_id',Auth::user()->id)->count();
        
        if($auth){
            $role = Auth::user()->role;
        }
        
        if(strcasecmp(Auth::user()->role,'Staff') == 0){
            $fup = FUP::where('user_id',Auth::user()->id)->get();
            $fubs = FUB::where('bidang_id',Auth::user()->bidang_id)->get();
            
            $fup_id = "";
            foreach($fubs as $fub){
                $fup_id .= $fub->fup_id.","; 
            }
            $arrFupId = explode(",",$fup_id);
            $tanggapan = FUP::whereIn('id', $arrFupId)->count();
            $kajian = Approval::where('decision', '=', 'setuju')->count();
            $hasilCTKop = KontrolPerubahan::where('hasil_mitigasi', '!=', null)->count();
            $kopz = KontrolPerubahan::where('hasil_mitigasi', '=', null)->count();

            if($fup){
                $fup = $fup->count();
            }

            $hasilCT = $tanggapan + $kajian + $hasilCTKop + $kopz;
            
            return view('home', compact('user','fup', 'tanggapan', 'role', 'usul', 'hasilCT'));
        }
        else{
            $kajian = Kajian::all();
            $entrykj = Approval::where('decision', '=', 'setuju')->count();
            $kontrol = KontrolPerubahan::all();
            $entrykop = Kajian::where('ch_status', '=', 'disetujui')->count();
            //Count Dashboard Bawah
            $fup = FUP::all()->count();
            $mdup_count = FUP::where('status', '=', 'Pending')->count();
            $tanggapan_count = FUP::where('status', '=', 'null')->count();
            $kajian_count = FUP::where('status', '=', 'Ditanggapi')->count();
            $kontrol_count = FUP::where('status', '=', 'Dikaji')->count();
            //Count Dashboard Atas
            $closed_count = FUP::where('status', '=', 'Closed')->count();
            $reject_count = FUP::where('status', '=', 'Ditolak')->count();

            $proses_count = $tanggapan_count + $kajian_count + $kontrol_count;

            return view('home', compact('user','fup','tanggapan_count', 'role', 'usul', 'kajian_count', 'entrykj', 'kontrol_count', 'entrykop', 'proses_count', 'closed_count', 'reject_count', 'mdup_count'));
        }
    }
}
