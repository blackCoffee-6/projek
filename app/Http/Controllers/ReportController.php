<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Kajian;
use App\Approval;
use App\KontrolPerubahan;
use App\Exports\RekapExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {
        $fups = FUP::all();
        $user = Auth::user();

        if($user->role == 'Staff'){
            $fups = FUP::where('bidang_id', 'like', "$user->bidang_id")->paginate(10);
        }else{
            $fups = FUP::paginate(10);
        }

        return view('report.report-up', compact('fups','user'));
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
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        }
        return view('report.report-kajian', compact('kajians','fups', 'apps', 'user'));
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
            $fups = FUP::whereIn('id', $arrFupId)->paginate(10);
        }
        return view('report.report-kontrol', compact('kontrols','fups', 'kajians', 'user'));
    }

    public function rekapIndex(Request $request)
    {
        $apps = Approval::all();
        $user = Auth::user();
        $fups = FUP::paginate(10);
        $kajians = Kajian::all();
        $kontrols = KontrolPerubahan::all();

        $ket_ups = '';
        foreach($kajians as $kajian){
            $ket_ups .= $kajian->ket_up.',';
        }
        $arrKetUp = explode(',', $ket_ups);

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

            $fups = FUP::whereBetween('date', [$from, $to])->get();

            return Excel::download(new RekapExport($from, $to, $fups), 'Excel-reports.xlsx');
        }

        return view('report.import', compact('fups', 'apps', 'user','kajians','kontrols','arrKetUp'));
    }

    // public function rekapKopIndex(Request $request)
    // {
    //     $user = Auth::user();
    //     $kontrols = KontrolPerubahan::all();

    //     $kajians = Kajian::where('ch_status', 'like', 'disetujui')->get();
    //     $fup_id = '';
    //     foreach($kajians as $kajian){
    //         $fup_id .= $kajian->fup_id.',';
    //     }
    //     $arrFupId = explode(',', $fup_id);
    //     $fups = FUP::whereIn('id', $arrFupId)->paginate(10);

    //     if($request->has('search'))
    //     {
    //         $from = $request->input('from');
    //         $to = $request->input('to');

    //         $kontrols = Kajian::whereBetween('aq_date', [$from, $to])->get();

    //         return view('report.import-kop', compact('kontrols', 'fups', 'kajians'));
    //     }elseif($request->has('exportExcel'))
    //     {
    //         $from = $request->input('from');
    //         $to = $request->input('to');

    //         // return Excel::download(new KopExport($from, $to), 'Excel-Kop.xlsx');
    //     }
    //     return view('report.import-kop', compact('kontrols', 'fups', 'kajians'));
    // }
}
