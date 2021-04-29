<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Kajian;
use App\KontrolPerubahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        $kajians = Kajian::where('ch_status', 'like', 'disetujui')->get();

        $fup_id = '';
        foreach($kajians as $kajian){
            $fup_id .= $kajian->fup_id.',';
        }
        $arrFUPId = explode(',',$fup_id);
        $fups = FUP::whereIn('id', $arrFUPId)->paginate(10);

        return view('control', compact('fups', 'user', 'kajians'));
    }

    public function listKop()
    {
        $kontrols = KontrolPerubahan::all();
        $fup_id = '';
        foreach($kontrols as $kontrol){
            $fup_id .= $kontrol->fup_id.','; //1,3,
        }
        $arrFupId = explode(',',$fup_id);//{1, 3}
        // dd($arrFupId);
        $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        // dd($kajians);
        
        return view('showKontrol', compact('kontrols','fups'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fup_id)
    {
        $fup = FUP::find($fup_id);
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        
        return view('perubahan', compact('role','fup'));
    }

    public function store(Request $request, $fup_id)
    {
        // dd($request->all());
        // dd($fup_id);
        if($request->dis_setuju != null){
            $request->request->add(['dis_setuju' => implode(',', $request->dis_setuju)]);
        }

        $request->request->add(['fup_id' => $fup_id]);

        KontrolPerubahan::create($request->all());
        Alert::success('Success', "Kontrol Perubahan Berhasil Dibuat!");
        return redirect('/home');
    }

    public function bacaKop($kop_id)
    {
        $kontrols = KontrolPerubahan::find($kop_id);
        $dis_setuju = $kontrols->dis_setuju;
        $dis_setujus = explode("," , $dis_setuju);
        return view('baca-kop', compact('kontrols','dis_setujus'));
    }
}
