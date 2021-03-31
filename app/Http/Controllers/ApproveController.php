<?php

namespace App\Http\Controllers;

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
        return view('approve', compact('fups'));
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
        $auth = Auth::check();
        $fup = FUP::find($id);
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
        // dump($request->decision);
        $user = Auth::user();
        
        if ($request->hasFile('file')){ 
            $file = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('file'), $file);
        }
        // dd($request->tanggapan2); 
        if($request->tanggapan != "tidak"){
            $tanggapan2 = implode(',', $request->tanggapan2);
            $request->request->add(['tanggapan2' => $tanggapan2]);
        }
        
        dd($request->all());
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
            'status' => $request-> decision
        ]);
        Alert::success('Success', "Status berhasil di update");
        return redirect('/home');
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
