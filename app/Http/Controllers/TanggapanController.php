<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $fups = FUP::where('tanggapan', 'like', 'perlu')->paginate(5);

        return view('list-tanggapan', compact('fups','user'));
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
        $request->request->add(['fup_id' => $id]);
        // dd($request->all());
        Tanggapan::create($request->all());

        Alert::success('Success', "Tanggapan Created Successfully!");
        return redirect('/List/Tanggapan');
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
