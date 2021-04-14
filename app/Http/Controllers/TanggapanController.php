<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Tanggapan;
use App\FUB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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
        $tanggapans = Tanggapan::all();
        
        if(strcasecmp($user->role,'staff') == 0){
            $fubs = FUB::where('bidang_id',$user->bidang_id)->get();
            
            $fup_id = "";
            foreach($fubs as $fub){
                $fup_id .= $fub->fup_id.","; 
            }
            $arrFupId = explode(",",$fup_id);
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);

            $tanggapanFlag = Tanggapan::whereIn('fup_id', $arrFupId)->where('bidang_id',Auth::user()->bidang_id)->get();
        }
        else{
            $fups = FUP::where('tanggapan', 'like', 'perlu')->paginate(10);
            $fup_id = "";
            foreach($fups as $fub){
                $fup_id .= $fub->id.","; 
            }
            $arrFupId = explode(",",$fup_id);
            $tanggapanFlag = Tanggapan::whereIn('fup_id', $arrFupId)->get();
        }

        if(Auth::user()->bidang_id == null){
            abort(404);
        }
        else{
            return view('tanggapan.index', compact('fups','user','tanggapans', 'tanggapanFlag'));
        }
        
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
        $bidang_id = Auth::user()->bidang_id == null ? "0" : Auth::user()->bidang_id;
        // dd($request->all());
        // tambahin validasi, biar si user ga submit form yg kosong
        $validator = Validator::make($request->all(),[
            'tg_rnd' => 'required',
            'ch_regulasi' => 'required',
            'ch_registrasi' => 'required',
            'tg_nama' => 'required'
        ]);
            
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        Tanggapan::create([
            'tg_rnd' => $request->tg_rnd,
            'fup_id' => $id,
            'ch_regulasi' => $request->ch_regulasi,
            'ch_registrasi' => $request->ch_registrasi,
            'dok_perlukan' => $request->dok_perlukan,
            'tg_nama' => $request->tg_nama,
            'tg_date' => $request->tg_date,
            'gt_bidang' => $request->gt_bidang,
            'gt_nama' => $request->gt_nama,
            'gt_date' => $request->gt_date,
            'bidang_tg' => $request->bidang_tg,
            'nama_tg' => $request->nama_tg,
            'date_tg' => $request->date_tg,
            'bidang_id' => $bidang_id,
        ]);

        Alert::success('Success', "Tanggapan Berhasil Dibuat!");
        return redirect('/Tanggapan');
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

        return view('tanggapan.show', compact('fup', 'role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $fup = FUP::find($id);
        $tanggapan = Tanggapan::where('id', $id)->first();
        $fup = FUP::find($tanggapan->FUP->id);
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        // dd($fup);
        return view('tanggapan.edit', compact('fup', 'tanggapan', 'role'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function showDetail($id){
        $fups = FUP::where('id',$id)->first();
        $tanggapans = Tanggapan::where('fup_id',$id)->paginate(10);
        return view('tanggapan.detail', compact('fups','tanggapans'));
    }
}
