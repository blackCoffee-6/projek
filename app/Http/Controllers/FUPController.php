<?php

namespace App\Http\Controllers;

use App\FUP;
use App\File;
use App\User;
use App\Bidang;
use App\Approval;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class FUPController extends Controller
{
    public function create()
    {
        $user = User::all();
        $bidang = Bidang::all();
        $bidang2 = Bidang::all();
        
        return view('FUP.create', compact('user', 'bidang' , 'bidang2'));
    }

    public function store(Request $request)
    {
        $no_usulan = Helper::IDGenerator(new FUP, 'no_usulan', 4, 'UP');

        $request->validate([
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
            'file'=>'max:2048|mimes:pdf,jpeg,jpg,png'
        ]);
            
        $user = Auth::user();

        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['bidang_id' => $request->bidang]);
        $request->request->add(['no_usulan' => $no_usulan]);
        $request->request->add(['status' => 'Pending']);
        FUP::create($request->all());

        $id = DB::getPdo()->lastInsertId();
        // dd($id);
        
        if($request->hasFile('file'))
        {
            $fileName = $request->file->getClientOriginalName() . '-' . time() . '-' . $request->file->extension();
            $request->file->move(public_path('file'), $fileName);

            File::create([
                'file' => $fileName,
                'fup_id' => $id
            ]);
        }
        Alert::success('Success', "Usulan Created Successfully!");
        return redirect('/home');
    }

    //untuk menampilkan list-usulan.blade.php
    public function index()
    {
        $fups = FUP::all();
        $files = File::all();
        $apps = Approval::all();
        $user = Auth::user();

        if($user->role == 'Staff'){
            $fups = FUP::where('bidang_id', 'like', "$user->bidang_id")->paginate(10);
        }else{
            $fups = FUP::paginate(10);
        }
        
        return view('FUP.index', compact('fups','apps','user','files'));
    }
    
    public function cetak($fup_id)
    {
        // dd($fups->bidang_id);
        // $fups = FUP::find($fup_id);
        $fups = FUP::where('id', $fup_id)->first();
        $bidang = Bidang::all();
        $files = File::where('fup_id', $fup_id)->first();
        $pdf = PDF::loadView('FUP.cetak-pdf', compact('fups','bidang','files'));

        // return $pdf->view('cetak.pdf'); //langsung download
        return $pdf->stream(); //ngeliat dulu, abis itu terserah mau download apa engga
    }

    public function edit($id)
    {
        $fup = FUP::find($id);
        $user = User::all();
        $bidang = Bidang::all();
        $bidang2 = Bidang::all();
        return view('FUP.edit', compact('fup', 'user', 'bidang','bidang2'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $fupUpdate = FUP::findOrFail($id);
        $request->request->add(['user_id' => $user->id]);
        $input = $request->all();
        $fupUpdate->fill($input)->save();
        
        if ($request->hasFile('file')){ 
            $fileName = $request->file->getClientOriginalName() . '-' . time() . '-' . $request->file->extension();
            $request->file->move(public_path('file'), $fileName);

            File::where('fup_id', $id)->update([
                'file' => $fileName
            ]);
        }
        
        // if($request->tanggapan != "tidak"){
        //     if($request->tanggapan2 != null)
            
        //     $tanggapan2 = implode(',', $request->tanggapan2);
        //     $request->request->add(['tanggapan2' => $tanggapan2]);
        // }
        // dd($request);
            
        // dd($request->tanggapan2);
        
        // if($request->tanggapan != "tidak"){
        //     FUB::where('fup_id', $id)->delete();
        //     $arrTanggapan = explode(",",$tanggapan2);
        //     if(count($arrTanggapan) > 1){
        //         foreach($arrTanggapan as $tanggapan){
        //             FUB::create([
        //                 'fup_id'=>$id,
        //                 'bidang_id'=>$tanggapan
        //             ]);
        //         }
        //     }
        //     else{
        //         FUB::create([
        //             'fup_id'=>$id,
        //             'bidang_id'=>$request->tanggapan2
        //         ]);
        //     }
        // }
        return redirect('/FUP')->with('alert', "Usulan Updated Successfully!");
    }

    public function destroy($id)
    {
        FUP::find($id)->delete(); 

        return redirect('/FUP')->with('failed', "Usulan Deleted Successfully!");
    }
    
}
