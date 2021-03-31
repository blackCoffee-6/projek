<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class FUPController extends Controller
{
    public function create()
    {
        $user = User::all();
        $product = Product::all();
        return view('FUP.create', compact('user','product'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'produk'=>'required',
            'ket_ketentuan'=>'required',
            'ket_usulan'=>'required',
            'ket_alasan'=>'required',
            'ch_sifat'=>'required',
            'pic_asman'=>'required',
            'pic_nama'=>'required',
            'cip_manager'=>'required',
            'cip_nama'=>'required',
            'qa_asman'=>'required',
            'qa_nama'=>'required',
            'tanggapan'=>'required'
            ]);
            
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
            
        $user = Auth::user();

        if($request->tanggapan != "tidak"){
            $tanggapan2 = implode(',', $request->tanggapan2);
            $request->request->add(['tanggapan2' => $tanggapan2]);
        }

        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['product_id' => $request->produk]);
        $request->request->add(['bidang_id' => $user->Bidang->id]);
        $request->request->add(['status' => "Pending"]);
        // dd($request->hasFile('image_uploded'));

        if ($request->hasFile('file')){ 
            $file = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('file'), $file);
            // dd($image);
         }

        //   dd($request->all());
         
        if($request->file)
        {
            $request->request->add(['file' => $request->file->getClientOriginalName()]);
        }else{
            $request->request->add(['file' => ""]);            
        }

        FUP::create($request->all());
        
        Alert::success('Success', "Usulan Created Successfully!");
        return redirect('/home');
    }

    //untuk menampilkan list-usulan.blade.php
    public function index()
    {
        $fups = FUP::paginate(5);
        return view('FUP.index', compact('fups'));
    }

    public function edit($id)
    {
        $fup = FUP::find($id);
        $product = Product::all();
        return view('FUP.edit', compact('fup', 'product'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($request->hasFile('file')){ 
            $file = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('file'), $file);
        }

        if($request->tanggapan != "tidak"){
            $tanggapan2 = implode(',', $request->tanggapan2);
            $request->request->add(['tanggapan2' => $tanggapan2]);
        }
        // dd($request->all()); 

        FUP::findOrFail($id)->update([
            'user_id' => Auth::user()->id,  
            'product_id' => $request->produk, 
            'bidang_id' => $user->Bidang->id, 
            'no_usulan' => $request-> no_usulan, 
            'date' => $request-> date, 
            'ket_ketentuan' => $request-> ket_ketentuan, 
            'ket_usulan' => $request-> ket_usulan, 
            'ket_alasan' => $request-> ket_alasan, 
            'ch_sifat' => $request-> ch_sifat, 
            'pic_asman' => $request-> pic_asman, 
            'pic_nama' => $request-> pic_nama, 
            'pic_date' => $request-> pic_date, 
            'cip_manager' => $request-> cip_manager, 
            'cip_nama' => $request-> cip_nama, 
            'cip_date' => $request-> cip_date, 
            'qa_asman' => $request-> qa_asman, 
            'qa_nama' => $request-> qa_nama, 
            'qa_date' => $request-> qa_date, 
            'tanggapan' => $request-> tanggapan, 
            'tanggapan2' => $request->tanggapan2,
            'file' => $request-> file, 
            'status' => "Pending"
        ]);

        return redirect('/FUP')->with('alert', "Usulan Updated Successfully!");
    }

    public function destroy($id)
    {
        FUP::find($id)->delete(); 

        return redirect('/FUP')->with('failed', "Usulan Deleted Successfully!");
    }
}
