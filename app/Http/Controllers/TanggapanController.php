<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Tanggapan;
use App\FUB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        if(strcasecmp($user->role,'staff') == 0){
            $fubs = FUB::where('bidang_id',$user->bidang_id)->get();
            
            $fup_id = "";
            foreach($fubs as $fub){
                $fup_id .= $fub->fup_id.","; 
            }
            $arrFupId = explode(",",$fup_id);
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        }
        else{
            $fups = FUP::where('tanggapan', 'like', 'perlu')->paginate(10);
        }

        return view('list-tanggapan', compact('fups','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // dd($request->all());
        // Tanggapan::create($request->all());

        foreach($request->input('dok_perlukan') as $key => $value) {
            Tanggapan::create([
                'tg_rnd' => $request->tg_rnd,
                'fup_id' => $id,
                'ch_regulasi' => $request->ch_regulasi,
                'ch_registrasi' => $request->ch_registrasi,
                'dok_perlukan' => $request->dok_perlukan [$key],
                'tg_nama' => $request->tg_nama,
                'tg_date' => $request->tg_date,
                'gt_bidang' => $request->gt_bidang,
                'gt_nama' => $request->gt_nama,
                'gt_date' => $request->gt_date,
                'bidang_tg' => $request->bidang_tg,
                'nama_tg' => $request->nama_tg,
                'date_tg' => $request->date_tg
            ]);
        }
        Alert::success('Success', "Tanggapan Created Successfully!");
        return redirect('/List/Tanggapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auth = Auth::check();
        $fup = FUP::find($id);
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }

        return view('tanggapan', compact('fup', 'role'));
    }
}
