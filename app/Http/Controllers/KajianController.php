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
        $user = Auth::user();
        $kajians = Kajian::all();
        
        $apps = Approval::where('decision', 'like', 'setuju')->get(); //{1 setuju}, {3 setuju}
        
        $fup_id = '';
        foreach($apps as $app){
            $fup_id .= $app->fup_id.','; //1,3,
        }
        $arrFupId = explode(',',$fup_id);//{1, 3}
        $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        
        // dd($kajians);   
       return view('listKajian', compact('fups', 'user', 'apps', 'kajians'));
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
    public function store(Request $request, $fup_id)
    {
        // dd($request->all()); 
        
        $request->validate([
            'ket_up' =>'required',
            'ru_a' =>'required',
            'ri_a'=>'required',
            'st_a'=>'required',
            'me_a'=>'required',
            'val_a'=>'required',
            'tr_a'=>'required',
            'pr_a'=>'required',
            'dok_a'=>'required',
            'si_a'=>'required',
            'ch_kategori'=>'required',
            'ch_status'=>'required',
            'qa_nama'=>'required',
            'asman_nama'=>'required',
            'aq_nama'=>'required',
            'ch_dis'=>'required'
            ]);
            
        $request->request->add(['fup_id' => $fup_id]);
        $request->request->add(['ket_up' => implode(',', $request->ket_up)]);
        $request->request->add(['ch_dis' => implode(',', $request->ch_dis)]);

        // dd($request);
        // dd($request->kj_tambahan); 
        Kajian::create($request->all());
        Alert::success('Success', "Kajian Berhasil Dibuat!");
        return redirect('/home');
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
        
        return view('kajian', compact('role','fup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kajian_id)
    {
        $kajians = Kajian::find($kajian_id);
        $auth = Auth::check();
        $role = 'Staff';
        
        if($auth){
            $role = Auth::user()->role;
        }

        $ket_up = $kajians->ket_up;
        $ket_ups = explode("," , $ket_up);

        $ch_dis = $kajians->ch_dis;
        $ch_diss = explode("," , $ch_dis);

        return view('editKajian', compact('role','kajians','ket_ups','ch_diss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kajian_id)
    {
        // dd($request->all());
        Kajian::findOrFail($kajian_id)->update([
            'ket_up' => implode(',', $request->ket_up),
            'ch_dis' => implode(',', $request->ch_dis),

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

            'severity1' => $request->severity,
            'detec1' => $request->detec,
            'occur1' => $request->occur,

            'getsev' => $request->getsev,
            'getdet' => $request->getdet,
            'getocc' => $request->getocc,
            'result_dxo' => $request->result_dxo,

            'ch_kategori' => $request->ch_kategori,
            'ch_status' => $request->ch_status,

            'qa_nama' => $request->qa_nama,
            'qa_date' => $request->qa_date,

            'asman_nama' => $request->asman_nama,
            'asman_date' => $request->asman_date,

            'aq_nama' => $request->aq_nama,
            'aq_date' => $request->aq_date
        ]);

        return redirect('/List/Kajian')->with('alert', "Kajian Updated Successfully!");
    }
    
    public function listKajian()
    {
        $kajians = Kajian::all();
        $fup_id = '';
        foreach($kajians as $kajian){
            $fup_id .= $kajian->fup_id.','; //1,3,
        }
        $arrFupId = explode(',',$fup_id);//{1, 3}
        // dd($fup_id);
        $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        // dd($kajians);
        
        return view('showKajian', compact('kajians','fups'));
    }

    public function bacaKajian($id)
    {
        $kajians = Kajian::find($id);

        $ket_up = $kajians->ket_up;
        $ket_ups = explode("," , $ket_up);

        $ch_dis = $kajians->ch_dis;
        $ch_diss = explode("," , $ch_dis);

        // dd($ket_ups);
        return view('baca-kajian', compact('kajians','ket_ups','ch_diss'));
    }
}
