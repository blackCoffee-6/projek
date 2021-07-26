<?php

namespace App\Http\Controllers;

use App\Approval;
use App\Exports\RekapExport;
use App\FUP;
use App\Kajian;
use App\KontrolPerubahan;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {
        $fups = FUP::all();
        $user = Auth::user();
        // dd($files);

        if($user->role == 'Staff'){
            $fups = FUP::where('bidang_id', 'like', "$user->bidang_id")->paginate(10);
        }else{
            $fups = FUP::paginate(10);
        }

        return view('report-up', compact('fups','user'));
    }

    public function indexKajian()
    {
        $user = Auth::user();
        $kajians = Kajian::all();

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
            // dd($fup_id);
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
            // dd($kajians);
        }
        return view('report-kajian', compact('kajians','fups', 'apps', 'user'));
    }

    public function indexKop()
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
            // dd($arrFupId);
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
            // dd($kajians);
        }
        return view('report-kontrol', compact('kontrols','fups', 'kajians', 'user'));
    }

    public function rekapIndex(Request $request)
    {
        $apps = Approval::all();
        $user = Auth::user();
        $fups = FUP::paginate(10);
            
        if($request->has('search'))
        {
            $from = $request->input('from');
            $to = $request->input('to');
            $fups = FUP::whereBetween('date', [$from, $to])->get();
            return view('import', compact('fups', 'apps', 'user'));
        }elseif($request->has('exportExcel'))
        {
            $from = $request->input('from');
            $to = $request->input('to');
            return Excel::download(new RekapExport($from, $to), 'Excel-reports.xlsx');
        }

        return view('import', compact('fups', 'apps', 'user'));
    }

    public function rekapExport()
    {

    }
}
