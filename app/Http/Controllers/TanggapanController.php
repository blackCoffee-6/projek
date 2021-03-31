<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FUP;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fup = FUP::all();
        return view('listTanggapan', compact('fup'));
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
        //
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
