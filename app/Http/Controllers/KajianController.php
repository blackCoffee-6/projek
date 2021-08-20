<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Kajian;
use App\Approval;
use Illuminate\Http\Request;
use App\Exports\KajianExport;
use App\FUB;
use App\KajianFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $kajians = Kajian::all();
        
        $apps = Approval::where('decision', 'like', 'setuju')->get(); //{1 setuju}, {3 setuju}
        
        $fup_id = '';
        foreach($apps as $app){
            $fup_id .= $app->fup_id.','; //1,3,
        }
        $arrFupId = explode(',',$fup_id);//{1, 3}
        $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
       return view('kajian.listKajian', compact('fups', 'user', 'apps', 'kajians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSearch(Request $request)
    {
        $user = Auth::user();
        $kajians = Kajian::all();
        $search = $request->input('query');
        $fups = FUP::where('ket_usulan', 'like', "%$search%")->orWhere('no_usulan', 'like', "%$search%")->paginate(5);
        return view('kajian.listKajian', compact('fups', 'user', 'kajians'));
    }

    public function indexSearch2(Request $request)
    {
        $kajians = Kajian::all();
        $search = $request->input('query');
        $fups = FUP::where('ket_usulan', 'like', "%$search%")->orWhere('no_usulan', 'like', "%$search%")->paginate(5);
        return view('kajian.showKajian', compact('fups', 'kajians'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $fup_id)
    {
        $request->validate([
            'ket_up' =>'required',
            'ru_a' =>'required',
            'ri_a'=>'required',
            'st_a'=>'required',
            'pj_a'=>'required',
            'me_a'=>'required',
            'val_a'=>'required',
            'tr_a'=>'required',
            'pr_a'=>'required',
            'dok_a'=>'required',
            'dk_a'=>'required',
            'si_a'=>'required',
            'ch_kategori'=>'required',
            'asman_nama'=>'required',
            'asman_date'=>'required',
            'aq_nama'=>'required',
            'aq_date'=>'required',
            'ch_dis'=>'required'
        ]);

        if($request->ket_up){
            $ket_up = implode(',', $request->ket_up);
            $request->request->add(['ket_up' => $ket_up]);
        }

        if($request->ru_b){
            $ru_b = implode(',', $request->ru_b);
            $request->request->add(['ru_b' => $ru_b]);
        }
        
        if($request->st_b){
            $st_b = implode(',', $request->st_b);
            $request->request->add(['st_b' => $st_b]);
        }
        
        if($request->val_b){
            $val_b = implode(',', $request->val_b);
            $request->request->add(['val_b' => $val_b]);
        }
        
        if($request->tr_b){
            $tr_b = implode(',', $request->tr_b);
            $request->request->add(['tr_b' => $tr_b]);
        }
        
        if($request->ch_dis){
            $ch_dis = implode(',', $request->ch_dis);
            $request->request->add(['ch_dis' => $ch_dis]);
        }
            
        $request->request->add(['fup_id' => $fup_id]);
        
        if($request->ch_status == 'disetujui'){
            FUP::findOrFail($fup_id)->update([
                'status' => 'Dikaji'
            ]);
        }elseif($request->ch_status == 'ditolak'){
            FUP::findOrFail($fup_id)->update([
                'status' => 'Ditolak'
            ]);
        }
        Kajian::create($request->all());

        $id = DB::getPdo()->lastInsertId();
        
        if($request->hasFile('kajian_files'))
        {
            $fileName = $request->kajian_files->getClientOriginalName() . '-' . time() . '-' . $request->kajian_files->extension();
            $request->kajian_files->move(public_path('kajian file'), $fileName);

            KajianFile::create([
                'kj_files' => $fileName,
                'kajian_id' => $id
            ]);
        }
        // dd($request->all());
        Alert::success('Success', "Kajian Berhasil Dibuat!");
        return redirect('/home');
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
        
        return view('kajian.kajian', compact('role','fup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kajian_id)
    {
        $kajians = Kajian::find($kajian_id);
        $files = KajianFile::where('kajian_id', $kajian_id)->get();
        $auth = Auth::check();
        $role = 'Staff';
        
        if($auth){
            $role = Auth::user()->role;
        }

        $ket_up = $kajians->ket_up;
        $ket_ups = explode("," , $ket_up);

        $ru_b = $kajians->ru_b;
        $ru_bb = explode("," , $ru_b);

        $st_b = $kajians->st_b;
        $st_bb = explode("," , $st_b);

        $val_b = $kajians->val_b;
        $val_bb = explode("," , $val_b);

        $tr_b = $kajians->tr_b;
        $tr_bb = explode("," , $tr_b);

        $ch_dis = $kajians->ch_dis;
        $ch_diss = explode("," , $ch_dis);

        return view('kajian.editKajian', compact('role', 'kajians', 'ket_ups', 'ru_bb', 'val_bb', 'tr_bb','st_bb','ch_diss','files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kajian_id)
    {
        $kajians = Kajian::findOrFail($kajian_id);
        
        if($request->ru_b != null){
            $request->request->add(['ru_b' => implode(',', $request->ru_b)]);
        }
        else{
            $request->request->add(['ru_b' => ""]);
        }

        if($request->st_b != null){
            $request->request->add(['st_b' => implode(',', $request->st_b)]);
        }
        else{
            $request->request->add(['st_b' => ""]);
        }

        if($request->val_b != null){
            $request->request->add(['val_b' => implode(',', $request->val_b)]);
        }
        else{
            $request->request->add(['val_b' => ""]);
        }

        if($request->tr_b != null){
            $request->request->add(['tr_b' => implode(',', $request->tr_b)]);
        }
        else{
            $request->request->add(['tr_b' => ""]);
        }

        if($request->ket_up != null){
            $request->request->add(['ket_up' => implode(',', $request->ket_up)]);
        }
        
        if($request->ch_dis != null){
            $request->request->add(['ch_dis' => implode(',', $request->ch_dis)]);
        }

        if($request->ch_status == 'disetujui'){
            FUP::findOrFail($kajian_id)->update([
                'status' => 'Dikaji'
            ]);
        }elseif($request->ch_status == 'ditolak'){
            FUP::findOrFail($kajian_id)->update([
                'status' => 'Ditolak'
            ]);
        }

        $input = $request->all();
        $kajians->fill($input)->save();

        if ($request->hasFile('kj_files')){ 
            $fileName = $request->kj_files->getClientOriginalName() . '-' . time() . '-' . $request->kj_files->extension();
            $request->kj_files->move(public_path('kajian file'), $fileName);

            KajianFile::where('kajian_id', $kajian_id)->update([
                'kj_files' => $fileName
            ]);
        }
        return redirect('/List/Kajian')->with('alert', "Kajian Updated Successfully!");
    }
    
    public function listKajian()
    {
        $user = Auth::user();
        $kajians = Kajian::all();
        $files = KajianFile::all();

        $apps = Approval::where('decision', 'like', 'setuju')->get();

        if($user->role == 'Staff'){
            $fup_id = '';
            foreach($apps as $app){
                $fup_id .= $app->fup_id.','; //1,3,
            }
            $arrFupId = explode(',',$fup_id);//{1, 3}
            $fups = FUP::whereIn('id', $arrFupId)->where('bidang_id', 'like', "$user->bidang_id")->orderBy('id', 'DESC')->paginate(10);
        }else{
            $fup_id = '';
            foreach($apps as $app){
                $fup_id .= $app->fup_id.','; //1,3,
            }
            $arrFupId = explode(',',$fup_id);//{1, 3}
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        }
        return view('kajian.showKajian', compact('kajians','fups', 'apps','files'));
    }

    public function bacaKajian($id)
    {
        $kajians = Kajian::find($id);

        $ket_up = $kajians->ket_up;
        $ket_ups = explode("," , $ket_up);

        $ru_b = $kajians->ru_b;
        $ru_bb = explode("," , $ru_b);

        $st_b = $kajians->st_b;
        $st_bb = explode("," , $st_b);

        $val_b = $kajians->val_b;
        $val_bb = explode("," , $val_b);

        $tr_b = $kajians->tr_b;
        $tr_bb = explode("," , $tr_b);

        $ch_dis = $kajians->ch_dis;
        $ch_diss = explode("," , $ch_dis);

        return view('kajian.baca-kajian', compact('kajians', 'ru_bb', 'ket_ups', 'st_bb', 'val_bb', 'tr_bb','ch_diss'));
    }

    public function export($id)
    {
        $kajians = Kajian::find($id);
        $fups = FUP::where('id', $kajians->fup_id)->first();

        $ket_up = $kajians->ket_up;
        $ket_ups = explode("," , $ket_up);
        $count_ketups = count($ket_ups);
        // dd($ket_ups);

        $ru_b = $kajians->ru_b;
        $ru_bb = explode("," , $ru_b);
        $count_rubb = count($ru_bb);
        
        $st_b = $kajians->st_b;
        $st_bb = explode("," , $st_b);
        $count_stbb = count($st_bb);
        
        $val_b = $kajians->val_b;
        $val_bb = explode("," , $val_b);
        $count_valbb = count($val_bb);
        
        $tr_b = $kajians->tr_b;
        $tr_bb = explode("," , $tr_b);
        $count_trbb = count($tr_bb);
        
        $ch_dis = $kajians->ch_dis;
        $ch_diss = explode("," , $ch_dis);
        $count_chdiss = count($ch_diss);
        // dd($count_valbb);
        // dd($ch_diss);
        // dd($ch_diss, $count_chdiss);

        return Excel::download(new KajianExport($kajians, $ket_ups, $count_ketups, 
        $ru_bb, $count_rubb, 
        $st_bb, $count_stbb, 
        $val_bb, $count_valbb, 
        $tr_bb, $count_trbb,
        $ch_diss, $count_chdiss,
        $fups), 'kajian.xlsx');
    }
}
