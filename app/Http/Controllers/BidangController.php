<?php

namespace App\Http\Controllers;

use App\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(){
        $bidang = Bidang::all();
        return view('bidang.index', compact('bidang'));
    }

    public function create()
    {
        return view('bidang.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        
        Bidang::create($request->all());
        return redirect('/Bidang')->with('alert', "Bidang Created Successfully!");
    }

    public function edit ($bidang_id){
        $bidang = Bidang::findOrFail($bidang_id);
        return view('bidang.edit', compact('bidang'));
    }
    
    public function update(Request $request, $bidang_id)
    {
        $bidang = Bidang::findOrFail($bidang_id);

        $input = $request->all();
        $bidang->fill($input)->save();
        return redirect('/Bidang')->with('alert', "Bidang Updated Successfully!");
    }

}
