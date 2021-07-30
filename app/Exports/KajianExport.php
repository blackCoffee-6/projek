<?php

namespace App\Exports;

use App\Kajian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KajianExport implements FromView, ShouldAutoSize
{
    use Exportable;

    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        return view('excel-kajian',[
            'kajians' => Kajian::find($this->id)
        ]);  
    }
}
