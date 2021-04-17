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
        dd($request->all());
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
        $kajians = Kajian::all();
        // dd($kajians);
        
        return view('showKajian', compact('kajians'));
    }

    public function bacaKajian()
    {
        return view('baca-kajian');
    }
}
