<?php

namespace App\Exports;

use App\Approval;
use App\FUP;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class RekapExport implements FromView, ShouldAutoSize
{
    use Exportable;

    public function __construct(String $from = null, String $to = null)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function view(): View
    {
        return view('cetak-excel', [
            'apps' => Approval::all(),
            'from' => FUP::where('date', '=', $this->from)->get(),
            'fups' => FUP::where('date', '>=', $this->from)->where('date', '<=', $this->to)->get(),
        ]);
    }

}
