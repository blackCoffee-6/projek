<?php

namespace App\Http\Controllers;

use App\Approval;
use App\Bidang;
use App\FUB;
use App\FUP;
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
        //ini masih nyoba" masih salah logicnya soalnya mau ngambil value table dari approval dan value fup_id yang decisionnya sudah disetujui
        $fups = FUP::orderBy('status', 'DESC')->paginate(5);
        $apps = Approval::all();
        $auth = Auth::check();
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
        // dd($request);
        $request->validate([
            'decision'=>'required'
        ]);

        if($request->tanggapan != "tidak"){
            $tanggapan2 = implode(',', $request->tanggapan2);
            $request->request->add(['tanggapan2' => $tanggapan2]);
        }else{
            $request->request->add(['tanggapan2' => '']);
        }

        $app = Approval::where('fup_id',$id)->first();
        if($app != null){
            // kalo fup udah di approve
            Approval::where('fup_id',$id)->update([
                'decision'=>$request->decision,
                'qa_asman'=>$request->qa_asman,
                'qa_nama'=>$request->qa_nama,
                'qa_date'=>$request->qa_date,
                'tanggapan'=>$request->tanggapan,
                'tanggapan2'=>$request->tanggapan2,
            ]);
        }
        else{
            // kalo fup belom di approve
            $request->request->add(['fup_id' => $id]);
            Approval::create($request->all());    
        }

        if($request->tanggapan != "tidak"){
            $arrTanggapan = explode(",",$tanggapan2);
            if(count($arrTanggapan) > 1){
                foreach($arrTanggapan as $tanggapan){
                    FUB::create([
                        'fup_id'=>$id,
                        'bidang_id'=>$tanggapan
                    ]);
                }
            }
            else{
                FUB::create([
                    'fup_id'=>$id,
                    'bidang_id'=>$request->tanggapan2
                ]);
            }
        }
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
        $bidang = Bidang::all();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        
        $tanggapan2 = $fup->tanggapan2;
        $tanggapans2 = explode(",", $tanggapan2);

        // dd($tanggapans2);
        return view('baca-approve', compact('fup', 'role','tanggapans2','bidang'));
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
