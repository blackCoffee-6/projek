<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Kajian;
use App\KontrolPerubahan;
use App\Exports\KopExport;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class KopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $kontrols = KontrolPerubahan::all();
        
        $kajians = Kajian::where('ch_status', 'like', 'disetujui')->get();

        $fup_id = '';
        foreach($kajians as $kajian){
            $fup_id .= $kajian->fup_id.',';
        }
        $arrFUPId = explode(',',$fup_id);
        $fups = FUP::whereIn('id', $arrFUPId)->paginate(10);

        return view('KOP.control', compact('kontrols', 'fups', 'user', 'kajians'));
    }

    public function listKop()
    {
        $user = Auth::user();
        $kontrols = KontrolPerubahan::all();

        $kajians = Kajian::where('ch_status', 'like', 'disetujui')->get();

        if($user->role == 'Staff'){
            $fup_id = '';
            foreach($kajians as $kajian){
                $fup_id .= $kajian->fup_id.','; //1,3,
            }
            $arrFupId = explode(',',$fup_id);//{1, 3}
            $fups = FUP::whereIn('id', $arrFupId)->where('bidang_id', 'like', "$user->bidang_id")->paginate(10);
        }else{
            $fup_id = '';
            foreach($kajians as $kajian){
                $fup_id .= $kajian->fup_id.','; //1,3,
            }
            $arrFupId = explode(',',$fup_id);//{1, 3}
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        }
        return view('KOP.showKontrol', compact('kontrols','fups', 'kajians'));
    }

    public function indexSearch(Request $request)
    {
        $user = Auth::user();
        $kontrols = KontrolPerubahan::all();
        $kajians = Kajian::where('ch_status', 'like', 'disetujui')->get();
        $search = $request->input('query');

        $fup_id = '';
        foreach($kajians as $kajian){
            $fup_id .= $kajian->fup_id.',';
        }
        $arrFUPId = explode(',',$fup_id);
        $fups = FUP::whereIn('id', $arrFUPId)->where('ket_usulan', 'like', "%$search%")->orWhere('no_usulan', 'like', "%$search%")->paginate(5);

        return view('KOP.control', compact('user', 'kontrols', 'kajians','fups'));
    }

    public function indexSearch2(Request $request)
    {
        $kontrols = KontrolPerubahan::all();
        $kajians = Kajian::where('ch_status', 'like', 'disetujui')->get();
        $search = $request->input('query');

        $fup_id = '';
        foreach($kajians as $kajian){
            $fup_id .= $kajian->fup_id.',';
        }
        $arrFupId = explode(',',$fup_id);
        $fups = FUP::whereIn('id', $arrFupId)->where('ket_usulan', 'like', "%$search%")->orWhere('no_usulan', 'like', "%$search%")->paginate(5);

        return view('KOP.showKontrol', compact('kontrols', 'kajians','fups'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fup_id)
    {
        $fup = FUP::find($fup_id);
        $auth = Auth::check();
        $role = 'Staff';

        if($auth){
            $role = Auth::user()->role;
        }
        
        return view('KOP.perubahan', compact('role','fup'));
    }

    public function store(Request $request, $fup_id)
    {
        // dd($fup_id);

        if($request->dis_setuju != null){
            $request->request->add(['dis_setuju' => implode(',', $request->dis_setuju)]);
        }

        $request->request->add(['fup_id' => $fup_id]);

        if($request->hasil_mitigasi_date != NULL){
            FUP::findOrFail($fup_id)->update([
                'status' => 'Closed'
            ]);
        }elseif($request->hasil_mitigasi != NULL){
            FUP::findOrFail($fup_id)->update([
                'status' => 'Ditolak'
            ]);
        }

        KontrolPerubahan::create($request->all());
        Alert::success('Success', "Kontrol Perubahan Berhasil Dibuat!");
        return redirect('/home');
    }

    public function bacaKop($kop_id)
    {
        $kontrols = KontrolPerubahan::find($kop_id);
        $dis_setuju = $kontrols->dis_setuju;
        $dis_setujus = explode("," , $dis_setuju);
        // dd($kop_id);
        return view('KOP.baca-kop', compact('kontrols','dis_setujus'));
    }

    public function edit($kontrol_id)
    {
        $kontrols = KontrolPerubahan::find($kontrol_id);
        
        $ru_tlp = $kontrols->ru_tlp;
        $ru_tlps = explode("," , $ru_tlp);
        
        $ri_tlp = $kontrols->ri_tlp;
        $ri_tlps = explode("," , $ri_tlp);
        
        $st_tlp = $kontrols->st_tlp;
        $st_tlps = explode("," , $st_tlp);
        
        $st_tlp2 = $kontrols->st_tlp2;
        $st_tlps2 = explode("," , $st_tlp2);
        
        $me_tlp = $kontrols->me_tlp;
        $me_tlps = explode("," , $me_tlp);
        
        $me_tlp2 = $kontrols->me_tlp2;
        $me_tlps2 = explode("," , $me_tlp2);
        
        $val_tlp = $kontrols->val_tlp;
        $val_tlps = explode("," , $val_tlp);
        
        $val_tlp2 = $kontrols->val_tlp2;
        $val_tlps2 = explode("," , $val_tlp2);
        
        $val_tlp3 = $kontrols->val_tlp3;
        $val_tlps3 = explode("," , $val_tlp3);
        
        $val_tlp4 = $kontrols->val_tlp4;
        $val_tlps4 = explode("," , $val_tlp4);
        
        $val_tlp5 = $kontrols->val_tlp5;
        $val_tlps5 = explode("," , $val_tlp5);
        
        $val_tlp6 = $kontrols->val_tlp6;
        $val_tlps6 = explode("," , $val_tlp6);
        
        $val_tlp7 = $kontrols->val_tlp7;
        $val_tlps7 = explode("," , $val_tlp7);
        
        $val_tlp8 = $kontrols->val_tlp8;
        $val_tlps8 = explode("," , $val_tlp8);
        
        $val_tlp9 = $kontrols->val_tlp9;
        $val_tlps9 = explode("," , $val_tlp9);
        
        $val_tlp10 = $kontrols->val_tlp10;
        $val_tlps10 = explode("," , $val_tlp10);
        
        $val_tlp11 = $kontrols->val_tlp11;
        $val_tlps11 = explode("," , $val_tlp11);
        
        $val_tlp12 = $kontrols->val_tlp12;
        $val_tlps12 = explode("," , $val_tlp12);
        
        $val_tlp13 = $kontrols->val_tlp13;
        $val_tlps13 = explode("," , $val_tlp13);
        
        $val_tlp14 = $kontrols->val_tlp14;
        $val_tlps14 = explode("," , $val_tlp14);
        
        $tr_tlp = $kontrols->tr_tlp;
        $tr_tlps = explode("," , $tr_tlp);
        
        $tr_tlp2 = $kontrols->tr_tlp2;
        $tr_tlps2 = explode("," , $tr_tlp2);
        
        $tr_tlp3 = $kontrols->tr_tlp3;
        $tr_tlps3 = explode("," , $tr_tlp3);
        
        $tr_tlp4 = $kontrols->tr_tlp4;
        $tr_tlps4 = explode("," , $tr_tlp4);
        
        $tr_tlp5 = $kontrols->tr_tlp5;
        $tr_tlps5 = explode("," , $tr_tlp5);
        
        $tr_tlp6 = $kontrols->tr_tlp6;
        $tr_tlps6 = explode("," , $tr_tlp6);
        
        $pro_tlp = $kontrols->pro_tlp;
        $pro_tlps = explode("," , $pro_tlp);
        
        $pro_tlp2 = $kontrols->pro_tlp2;
        $pro_tlps2 = explode("," , $pro_tlp2);
        
        $pro_tlp3 = $kontrols->pro_tlp3;
        $pro_tlps3 = explode("," , $pro_tlp3);
        
        $dok_tlp = $kontrols->dok_tlp;
        $dok_tlps = explode("," , $dok_tlp);
        
        $dok_tlp2 = $kontrols->dok_tlp2;
        $dok_tlps2 = explode("," , $dok_tlp2);
        
        $dok_tlp3 = $kontrols->dok_tlp3;
        $dok_tlps3 = explode("," , $dok_tlp3);
        
        $dok_tlp4 = $kontrols->dok_tlp4;
        $dok_tlps4 = explode("," , $dok_tlp4);
        
        $dok_tlp5 = $kontrols->dok_tlp5;
        $dok_tlps5 = explode("," , $dok_tlp5);
        
        $dok_tlp6 = $kontrols->dok_tlp6;
        $dok_tlps6 = explode("," , $dok_tlp6);
        
        $dok_tlp7 = $kontrols->dok_tlp7;
        $dok_tlps7 = explode("," , $dok_tlp7);
        
        $dok_tlp8 = $kontrols->dok_tlp8;
        $dok_tlps8 = explode("," , $dok_tlp8);
        
        $dok_tlp9 = $kontrols->dok_tlp9;
        $dok_tlps9 = explode("," , $dok_tlp9);
        
        $sis_tlp = $kontrols->sis_tlp;
        $sis_tlps = explode("," , $sis_tlp);
        
        $dis_setuju = $kontrols->dis_setuju;
        $dis_setujus = explode("," , $dis_setuju);

        return view('KOP.edit-kop', compact('kontrols',
        'ru_tlps', 'ri_tlps', 'st_tlps', 'st_tlps2',
        'me_tlps', 'me_tlps2',
        'val_tlps', 'val_tlps2', 'val_tlps3', 'val_tlps4', 'val_tlps5', 'val_tlps6',
        'val_tlps7', 'val_tlps8', 'val_tlps9', 'val_tlps10', 'val_tlps11', 'val_tlps12',
        'val_tlps13', 'val_tlps14',
        'tr_tlps', 'tr_tlps2', 'tr_tlps3', 'tr_tlps4', 'tr_tlps5', 'tr_tlps6',
        'pro_tlps', 'pro_tlps2', 'pro_tlps3',
        'dok_tlps', 'dok_tlps2', 'dok_tlps3', 'dok_tlps4', 'dok_tlps5', 'dok_tlps6', 'dok_tlps7', 'dok_tlps8', 'dok_tlps9',
        'sis_tlps', 'dis_setujus'));
    }
    
    public function update(Request $request, $kontrol_id)
    {
        $kontrols = KontrolPerubahan::findOrFail($kontrol_id);
        
        if($request->dis_setuju != null){
            $request->request->add(['dis_setuju' => implode(',', $request->dis_setuju)]);
        }

        if($request->hasil_mitigasi_date != NULL){
            FUP::findOrFail($kontrol_id)->update([
                'status' => 'Closed'
            ]);
        }elseif($request->hasil_mitigasi != NULL){
            FUP::findOrFail($kontrol_id)->update([
                'status' => 'Ditolak'
            ]);
        }

        $input = $request->all();
        $kontrols->fill($input)->save();

        return redirect('/List/Kontrol/Perubahan')->with('alert', "Kontrol Perubahan Updated Successfully!");
    }

    public function export($id)
    {
        $kontrols = KontrolPerubahan::find($id);
        $fups = FUP::where('id', $kontrols->fup_id)->first();
        $dis_setuju = $kontrols->dis_setuju;
        $dis_setujus = explode("," , $dis_setuju);
        $count_dissetujus = count($dis_setujus);
        // dd($dis_setujus, $count_dissetujus); 
        return Excel::download(new KopExport($kontrols, $fups, $dis_setujus, $count_dissetujus), 'kop.xlsx');
    }
}
