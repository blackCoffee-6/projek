<?php

namespace App\Exports;

use App\FUP;
use App\Approval;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RekapExport implements FromView, ShouldAutoSize, WithStyles
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
            'fups' => FUP::where('date', '>=', $this->from)->where('date', '<=', $this->to)->get(),
            'from' => $this->from,
            'to' => $this->to
        ]);
    }
    
    public function styles(Worksheet $sheet)
    {

        $styleArray = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
        $sheet->getStyle('A4:F15')->applyFromArray($styleArray);

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];
        $sheet->getStyle('A1:F4')->applyFromArray($styleArray);

        $sheet->getStyle('A')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A5:F5')->getFill()->getStartColor()->setARGB('FFFF0000');
    }
}

