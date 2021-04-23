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
        $apps = Approval::where('decision', 'like', 'setuju')->get(); //{1 setuju}, {3 setuju}
        $fup_id = '';
        foreach($apps as $app){
            $fup_id .= $app->fup_id.','; //1,3,
        }
        $arrFupId = explode(',',$fup_id);//{1, 3}
        $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        $kajians = Kajian::all();
    
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
        
        $rub = $request->ru_b == null ? '-' : $request->ru_b;
        $ruk = $request->ru_ket == null ? '-' : $request->ru_ket;
        $rib = $request->ri_b == null ? '-' : $request->ri_b;
        $rik = $request->ri_ket == null ? '-' : $request->ri_ket;
        $stb = $request->st_b == null ? '-' : $request->st_b;
        $stk = $request->st_ket == null ? '-' : $request->st_ket;
        $met = $request->me_ket == null ? '-' : $request->me_ket;
        $vab = $request->val_b == null ? '-' : $request->val_b;
        $vat = $request->val_ket == null ? '-' : $request->val_ket;
        $trb = $request->tr_b == null ? '-' : $request->tr_b;
        $trk = $request->tr_ket == null ? '-' : $request->tr_ket;
        $prd = $request->pr_dok == null ? '-' : $request->pr_dok;
        $prk = $request->pr_ket == null ? '-' : $request->pr_ket;
        $dob = $request->dok_b == null ? '-' : $request->dok_b;
        $dok = $request->dok_ket == null ? '-' : $request->dok_ket;
        $sik = $request->si_ket == null ? '-' : $request->si_ket;
        $kjtam = $request->kj_tambahan == null ? '-' : $request->kj_tambahan;


        // dd($request->all());
        // Kajian::create($request->all());
        Kajian::create([
            'fup_id'=>$request->fup_id,
            'ket_up'=>$request->ket_up,
            'ru_a'=>$request->ru_a,
            'ru_b'=>$rub,
            'ru_ket'=>$ruk,
            'ri_a'=>$request->ri_a,
            'ri_b'=>$rib,
            'ri_ket'=>$rik,
            'st_a'=>$request->st_a,
            'st_b'=>$stb,
            'st_ket'=>$stk,
            'me_a' => $request->me_a,
            'me_ket' => $met,
            'val_a' =>$request->val_a,
            'val_b' =>$vab,
            'val_ket' =>$vat,
            'tr_a' =>$request->tr_a,
            'tr_b' =>$trb,
            'tr_ket' =>$trk,
            'pr_a' =>$request->pr_a,
            'pr_dok' =>$prd,
            'pr_ket' =>$prk,
            'dok_a' =>$request->dok_a,
            'dok_b' =>$dob,
            'dok_ket' => $dok,
            'si_a' =>$request->si_a,
            'si_ket' =>$sik,
            'kj_tambahan' =>$kjtam,
            'severity1' =>$request->severity1,
            'detec1' =>$request->detec1,
            'occur1' =>$request->occur1,
            'getsev' =>$request->getsev,
            'getdet' =>$request->getdet,
            'getocc' =>$request->getocc,
            'result_dxo' =>$request->result_dxo,
            'ch_kategori' =>$request->ch_kategori,
            'ch_status' =>$request->ch_status,
            'qa_nama' =>$request->qa_nama,
            'qa_date' =>$request->qa_date,
            'asman_nama' =>$request->asman_nama,
            'asman_date' =>$request->asman_date,
            'aq_nama' =>$request->aq_nama,
            'aq_date' =>$request->aq_date,
            'ch_dis' =>$request->ch_dis
        ]);
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
    
    public function listKajian()
    {
        // $apps = Approval::where('decision', 'like', 'setuju')->get();
        $kajians = Kajian::all();
        $fup_id = '';
        foreach($kajians as $kajian){
            $fup_id .= $kajian->fup_id.','; //1,3,
        }
        $arrFupId = explode(',',$fup_id);//{1, 3}
        // dd($arrFupId);
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
