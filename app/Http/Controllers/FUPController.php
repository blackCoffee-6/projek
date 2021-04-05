<?php

namespace App\Http\Controllers;

use App\Approval;
use App\Bidang;
use App\FUB;
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
        $bidang = Bidang::all();
        $bidang2 = Bidang::all();
        return view('FUP.create', compact('user','product', 'bidang' , 'bidang2'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bidang'=>'required',
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
        $request->request->add(['bidang_id' => $request->bidang]);
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

        $fup_id = FUP::create($request->all())->id;

        if($request->tanggapan != "tidak"){
            $arrTanggapan = explode(",",$tanggapan2);
            if(count($arrTanggapan) > 1){
                foreach($arrTanggapan as $tanggapan){
                    FUB::create([
                        'fup_id'=>$fup_id,
                        'bidang_id'=>$tanggapan
                    ]);
                }
            }
            else{
                FUB::create([
                    'fup_id'=>$fup_id,
                    'bidang_id'=>$request->tanggapan2
                ]);
            }
        }
        
        Alert::success('Success', "Usulan Created Successfully!");
        return redirect('/home');
    }

    //untuk menampilkan list-usulan.blade.php
    public function index()
    {
        $fups = FUP::paginate(10);
        $apps = Approval::all();
        $user = Auth::user();

        return view('FUP.index', compact('fups','apps','user'));
    }

    public function edit($id)
    {
        $fup = FUP::find($id);
        $user = User::all();
        $product = Product::all();
        $bidang = Bidang::all();
        return view('FUP.edit', compact('fup', 'user', 'product', 'bidang'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($request->hasFile('file')){ 
            $file = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('file'), $file);
        }
        // dd($request->tanggapan2);
        
        if($request->tanggapan != "tidak"){
            if($request->tanggapan2 != null)

            $tanggapan2 = implode(',', $request->tanggapan2);
            $request->request->add(['tanggapan2' => $tanggapan2]);
        }
         

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
