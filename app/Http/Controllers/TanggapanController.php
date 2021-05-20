<?php

namespace App\Http\Controllers;

use App\Approval;
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
        $apps = Approval::all();
        $fups = FUP::all();
        $tanggapans = Tanggapan::all();

        //mau nampilin fup yang tanggapan approval nya "perlu"
        //berarti kalo ada fup yang not approve, tapi tanggapannya "perlu", masih bisa ketampil di tanggapan dong?

        if($user->role == 'Staff'){
            // buat nampilin ke bidang yang di perlukan
            $fubs = FUB::where('bidang_id',$user->bidang_id)->get();

            $fup_id = "";
            foreach($fubs as $fub){
                $fup_id .= $fub->fup_id.","; 
            }
            $arrFupId = explode(",",$fup_id);
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);

            $tanggapanFlag = Tanggapan::whereIn('fup_id', $arrFupId)->where('bidang_id',$user->bidang_id)->get();
        }
        else{
            $apps = Approval::where('tanggapan', 'like', 'perlu')->paginate(10);

            $fup_id = "";
                foreach($apps as $app){
                    $fup_id .= $app->id.","; 
                }
            $arrFupId = explode(",",$fup_id);
            $fups = FUP::whereIn('id', $arrFupId)->get();
            $tanggapanFlag = Tanggapan::whereIn('fup_id', $arrFupId)->get();
        }

        if($user->role == 'Approval'){
            abort(404);
        }
        else{
            return view('tanggapan.index', compact('apps','fups','tanggapans','tanggapanFlag','user'));
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

        Tanggapan::create([
            'fup_id' => $id,

            'tg_nama' => $request->tg_nama,
            'tg_bidang' => $request->tg_bidang,
            'tg_date' => $request->tg_date,

            'gt_bidang' => $request->gt_bidang,
            'gt_nama' => $request->gt_nama,
            'gt_date' => $request->gt_date,

            'bidang_tg' => $request->bidang_tg,
            'nama_tg' => $request->nama_tg,
            'date_tg' => $request->date_tg,

            'tg_bidang2' => $request->tg_bidang2,
            'tg_nama2' => $request->tg_nama2,
            'tg_date2' => $request->tg_date2,
            'tg_bidang3' => $request->tg_bidang3,
            'tg_nama3' => $request->tg_nama3,
            'tg_date3' => $request->tg_date3,

            'bidang_id' => $bidang_id
        ]);

        Alert::success('Success', "Tanggapan Berhasil Dibuat!");
        return redirect('/Tanggapan')->with('alert', "Tanggapan Created Successfully!");
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
