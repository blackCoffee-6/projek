<?php

namespace App\Exports;

use App\FUP;
use App\Approval;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RekapExport implements FromView, ShouldAutoSize, WithStyles, WithDrawings
{
    use Exportable;

    public function __construct(String $from = null, String $to = null)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function view(): View
    {
        return view('excel.cetak-excel', [
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
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],  
            ],
        ];
        $sheet->getStyle('A6:F15')->applyFromArray($styleArray);

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];
        $sheet->getStyle('A2:F6')->applyFromArray($styleArray);

        $sheet->getStyle('A')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A6:F6')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
        ->getStartColor()->setARGB('6696e3');

    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/assets/logo.png'));
        $drawing->setHeight(42);
        $drawing->setCoordinates('A1');

        return $drawing;
    }
}

