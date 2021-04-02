<?php

namespace App\Http\Controllers;

use App\Approval;
use App\FUP;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fups = FUP::paginate(5);
        $apps = Approval::all();
        $auth = Auth::check();
        $product = Product::all();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        // dd($apps);
        return view('approve', compact('fups', 'apps', 'role'));
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
        // dd($request->decision);
        $request->request->add(['fup_id' => $id]);
        Approval::create($request->all());

        Alert::success('Success', "Status Updated Successfully!");
        return redirect('/approve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fup = FUP::find($id);
        $auth = Auth::check();
        $product = Product::all();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        return view('baca-approve', compact('fup', 'role', 'product'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
