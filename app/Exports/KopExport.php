<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class KopExport implements FromView, ShouldAutoSize, WithStyles, WithDrawings, WithColumnWidths
{
    use Exportable;

    protected $kontrols;
    protected $fups;
    protected $dis_setujus;
    protected $count_dissetujus;

    public function __construct($kontrols, $fups, $dis_setujus, $count_dissetujus)
    {
        $this->kontrols = $kontrols;
        $this->fups = $fups;
        $this->dis_setujus = $dis_setujus;
        $this->count_dissetujus = $count_dissetujus;
    }

    public function view(): View
    {
        return view('excel.excel-kop',[
            'kontrols' => $this->kontrols,
            'fups' => $this->fups,
            'dis_setujus' => $this->dis_setujus, 
            'count_dissetujus' => $this->count_dissetujus
        ]);  
    }
    // lebar column custom
    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'B' => 30,            
            'C' => 16,            
            'D' => 16,            
            'E' => 10,            
            'F' => 18,            
            'G' => 10,            
            'H' => 10,            
            'I' => 10,            
            'J' => 10,            
            'K' => 10,            
            'L' => 10,            
            'M' => 10,            
            'N' => 10,          
        ];
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
        $sheet->getStyle('A6:N58')->applyFromArray($styleArray);

        $styleArray = [
            'font' => [
                'name' => 'Calibri',
                'size' => 16,
                'bold' => true,
            ],
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ];
        $sheet->getStyle('E1:G1')->applyFromArray($styleArray);

        $sheet->getStyle('A')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('B7:B58')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C7:N58')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A7:B50')->getAlignment()->setWrapText(true);
        $sheet->getStyle('C')->getAlignment()->setWrapText(true);
        $sheet->getStyle('D')->getAlignment()->setWrapText(true);
        $sheet->getStyle('G7:N58')->getAlignment()->setWrapText(true);
        $sheet->getStyle('E6:E58')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        $sheet->getTabColor()->setRGB('6696e3');
        $sheet->freezePane( 'A7' );

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
