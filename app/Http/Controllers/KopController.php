<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Kajian;
use App\KontrolPerubahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
