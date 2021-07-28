<?php

namespace App\Exports;

use App\FUP;
use App\Kajian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class KajianExport implements FromView
{
    use Exportable;

    protected $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        return view('excel-kajian',[
            'kajians' => Kajian::find($this->id),
            // 'kajians' => Kajian::where('fup_id', $this->id)->get()
        ]);    
    }
}
