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
        dd($request->all());

        $validator = Validator::make($request->all(),[
            'ket_up'=>'required',
            'ru_a'=>'required',
            'ru_b'=>'required',
            'ri_a'=>'required',
            'ri_b'=>'required',
            'st_a'=>'required',
            'st_b'=>'required',
            'me_a'=>'required',
            'val_a'=>'required',
            'val_b'=>'required',
            'tr_a'=>'required',
            'tr_b'=>'required',
            'pr_a'=>'required',
            'dok_a'=>'required',
            'si_a'=>'required',
            'severity'=>'required',
            'detec'=>'required',
            'occur'=>'required',
            'getsev'=>'required',
            'getdet'=>'required',
            'getocc'=>'required',
            'dxo'=>'required',
            'ch_kategori'=>'required',
            'ch_status'=>'required',
            'qa_nama'=>'required',
            'qa_date'=>'required',
            'asman_nama'=>'required',
            'asman_date'=>'required',
            'aq_nama'=>'required',
            'aq_date'=>'required',
            'ch_dis'=>'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors());
        }

        // Kajian::create([
        //     'ket_up' => $request->ket_up,
        // ]);
        return redirect('/Detail/Kajian/');
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
