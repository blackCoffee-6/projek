<?php

namespace App\Http\Controllers;

use App\Approval;
use App\Bidang;
use App\FUB;
use App\FUP;
use App\User;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


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
        $data = DB::table('fups')->where('id')->get();
        $bln = date('M');
        $thn = date('Y');

        if(is_null($data)){
            $no_usulan = '1'.'/UP/'.$bln.'/'.$thn;
        }else{
            $id = FUP::getId();
            foreach ($id as $value)
            $idlama = $value->id;
            $idbaru = $idlama + 1;
            $no_usulan = $idbaru.'/UP/'.$bln.'/'.$thn;  
        }
        // if($fup){
        //     $id = FUP::getId();
        //     foreach ($id as $value)
        //     $idlama = $value->id;
        //     $idbaru = $idlama + 1;
        //     $no_usulan = $idbaru.'/UP/'.$bln.'/'.$thn;
        // }elseif(!$fup){
        //     $no_usulan = '1'.'/UP/'.$bln.'/'.$thn;
        // }

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
            'cip_nama'=>'required'
        ]);
            
        $user = Auth::user();
        // dd($request->all());
        // if($request->tanggapan != "tidak"){
        //     $tanggapan2 = implode(',', $request->tanggapan2);
        //     $request->request->add(['tanggapan2' => $tanggapan2]);
        // }

        
        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['bidang_id' => $request->bidang]);
        $request->request->add(['no_usulan' => $no_usulan]);
        $request->request->add(['status' => 'Pending']);
        // dd($request->hasFile('image_uploded'));

        if ($request->hasFile('file')){ 
            $file = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('file'), $file);
            // dd($image);
         }

          
         
        if($request->file)
        {
            $request->request->add(['file' => $request->file->getClientOriginalName()]);
        }else{
            $request->request->add(['file' => ""]);            
        }

        FUP::create($request->all());

        // if($request->tanggapan != "tidak"){
        //     $arrTanggapan = explode(",",$tanggapan2);
        //     if(count($arrTanggapan) > 1){
        //         foreach($arrTanggapan as $tanggapan){
        //             FUB::create([
        //                 'fup_id'=>$fup_id,
        //                 'bidang_id'=>$tanggapan
        //             ]);
        //         }
        //     }
        //     else{
        //         FUB::create([
        //             'fup_id'=>$fup_id,
        //             'bidang_id'=>$request->tanggapan2
        //         ]);
        //     }
        // }
        
        Alert::success('Success', "Usulan Created Successfully!");
        return redirect('/home');
    }
    
    //untuk menampilkan list-usulan.blade.php
    public function index()
    {
        $fups = FUP::paginate(10);
        $apps = Approval::all();
        $user = Auth::user();
        
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        
        return view('FUP.index', compact('fups','apps','user','role'));
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

        if ($request->hasFile('file')){ 
            $file = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('file'), $file);
        }
        
        // if($request->tanggapan != "tidak"){
        //     if($request->tanggapan2 != null)
            
        //     $tanggapan2 = implode(',', $request->tanggapan2);
        //     $request->request->add(['tanggapan2' => $tanggapan2]);
        // }
        // dd($request);
        
        FUP::findOrFail($id)->update([
            'user_id' => Auth::user()->id,  
            'produk' => $request->produk, 
            'bidang_id' => $request->bidang, 
            'no_usulan' => $request->no_usulan, 
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
            'file' => $request-> file, 
            'status' => "Pending"
        ]);
            
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
