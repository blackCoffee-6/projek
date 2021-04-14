<?php

namespace App\Http\Controllers;

use App\Approval;
use App\FUP;
use App\Kajian;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $fups = FUP::paginate(10);
        $user = Auth::user();
        $apps = Approval::where('decision', 'like', 'setuju')->get(); //{1 setuju}, {3 setuju}
        $fup_id = '';
        foreach($apps as $app){
            $fup_id .= $app->fup_id.','; //1,3,
        }
        $arrFupId = explode(',',$fup_id);//{1, 3}
        $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
    
       return view('listKajian', compact('fups', 'user', 'apps'));
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
    public function store(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(),[
            // 'ket_up'=>'required', --Gabisa ngambil id si ket_up karena nama checboxnya beda2--
            'ru_a'=>'required',
            'ri_a'=>'required',
            'st_a'=>'required',
            'me_a'=>'required',
            'val_a'=>'required',
            'tr_a'=>'required',
            'pr_a'=>'required',
            'dok_a'=>'required',
            'si_a'=>'required',
            // 'severity'=>'required',
            // 'detec'=>'required',
            // 'occur'=>'required',
            'ch_kategori'=>'required',
            'ch_status'=>'required',
            'qa_nama'=>'required',
            'asman_nama'=>'required',
            'aq_nama'=>'required',
            // 'ch_dis'=>'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors());
        }

        Kajian::create([
            // 'fup_id' => $id,
            'ket_up' => $request->ket_up,
            'ru_a' => $request->ru_a,
            'ru_b' => $request->ru_b,
            'ru_ket' => $request->ru_ket,
            'ri_a' => $request->ri_a,
            'ri_b' => $request->ri_b,
            'ri_ket' => $request->ri_ket,
            'st_a' => $request->st_a,
            'st_b' => $request->st_b,
            'st_ket' => $request->st_ket,
            'me_a' => $request->me_a,
            'me_ket' => $request->me_ket,
            'val_a' => $request->val_a,
            'val_b' => $request->val_b,
            'val_ket' => $request->val_ket,
            'tr_a' => $request->tr_a,
            'tr_b' => $request->tr_b,
            'tr_ket' => $request->tr_ket,
            'pr_a' => $request->pr_a,
            'pr_dok' => $request->pr_dok,
            'pr_ket' => $request->pr_ket,
            'dok_a' => $request->dok_a,
            'dok_b' => $request->dok_b,
            'dok_ket' => $request->dok_ket,
            'si_a' => $request->si_a,
            'si_ket' => $request->si_ket,
            'kj_tambahan' => $request->kj_tambahan,
            'severity1' => $request->severity1,
            'detec1' => $request->detec1,
            'occur1' => $request->occur1,
            'getsev' => $request->getsev,
            'getdet' => $request->getdet,
            'getocc' => $request->getocc,
            'dxo' => $request->result_dxo,
            'ch_kategori' => $request->ch_kategori,
            'ch_status' => $request->ch_status,
            'qa_nama' => $request->qa_nama,
            'qa_date' => $request->qa_date,
            'asman_nama' => $request->asman_nama,
            'asman_date' => $request->asman_date,
            'aq_nama' => $request->aq_nama,
            'aq_date' => $request->aq_date,
            'ch_dis' => $request->ch_dis
        ]);

        Alert::success('Success', "Kajian Berhasil Dibuat!");
        return redirect('/List/Kajian/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        return view('kajian', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
