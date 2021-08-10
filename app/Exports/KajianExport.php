<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class KajianExport implements FromView, ShouldAutoSize, WithStyles, WithDrawings
{
    use Exportable;

    protected $kajians;
    protected $fups;
    protected $ket_ups;
    protected $count_ketups;
    protected $ru_bb;
    protected $count_rubb;
    protected $st_bb;
    protected $count_stbb;
    protected $val_bb;
    protected $count_valbb;
    protected $tr_bb;
    protected $count_trbb;
    protected $ch_diss;
    protected $count_chdiss;
    
    public function __construct($kajians, $ket_ups, $count_ketups, $ru_bb, $count_rubb, 
    $st_bb, $count_stbb, $val_bb, $count_valbb, $tr_bb, $count_trbb, $ch_diss, $count_chdiss, $fups)
    {
        $this->kajians = $kajians;
        $this->ket_ups = $ket_ups;
        $this->count_ketups = $count_ketups;
        $this->ru_bb = $ru_bb;
        $this->count_rubb = $count_rubb;
        $this->st_bb = $st_bb;
        $this->count_stbb = $count_stbb;
        $this->val_bb = $val_bb;
        $this->count_valbb = $count_valbb;
        $this->tr_bb = $tr_bb;
        $this->count_trbb = $count_trbb;
        $this->ch_diss = $ch_diss;
        $this->count_chdiss = $count_chdiss;
        $this->fups = $fups;
    }

    public function view(): View
    {
        return view('excel.excel-kajian',[
            'kajians' => $this->kajians,
            'ket_ups' => $this->ket_ups,
            
            'ru_bb' => $this->ru_bb,
            'st_bb' => $this->st_bb,
            'val_bb' => $this->val_bb,
            'tr_bb' => $this->tr_bb,
            'ch_diss' => $this->ch_diss,
            
            'count_ketups' => $this->count_ketups,
            'count_rubb' => $this->count_rubb,
            'count_stbb' => $this->count_stbb,
            'count_valbb' => $this->count_valbb,
            'count_trbb' => $this->count_trbb,
            'count_chdiss' => $this->count_chdiss,
            'fups' => $this->fups
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
        $sheet->getStyle('A19:E89')->applyFromArray($styleArray);

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
        $sheet->getStyle('A3:E3')->applyFromArray($styleArray);
        // Regulasi
        $sheet->getStyle('A21:B89')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('E')->getAlignment()->setWrapText(true);
        $sheet->getStyle('D')->getAlignment()->setWrapText(true);
        $sheet->getStyle('C')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A62')->getAlignment()->setWrapText(true);
        $sheet->getStyle('E')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('D21:D60')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
        $sheet->getStyle('C22')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C21:D21')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // penilaian resiko mutu
        $sheet->getStyle('A66:E66')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        
        //Registrasi
        $sheet->getStyle('C28')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C27:D27')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        //Stabilitas
        $sheet->getStyle('C30')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C29:D29')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Pengujian
        $sheet->getStyle('C36')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C35:D35')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Masa Edar
        $sheet->getStyle('C38')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C37:D37')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);

        // Validasi / Kualifikasi
        $sheet->getStyle('C40')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('D39')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C39:D39')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Trial
        $sheet->getStyle('C49')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C48:D48')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Produksi
        $sheet->getStyle('C54')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C53:D53')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Dokumen
        $sheet->getStyle('C56')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('D55')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C55:D55')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Design Kemasan
        $sheet->getStyle('C58')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C57:D57')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Sistem ERP
        $sheet->getStyle('C60')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('C59:D59')->getFont()->setBold(\PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE);
        
        // Jabatan
        $sheet->getStyle('C86:E88')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getTabColor()->setRGB('6696e3');
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
