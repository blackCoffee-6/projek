<?php

namespace App\Exports;

use App\Kajian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class KajianExport implements FromCollection
{
    use Exportable;

    protected $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function collection()
    {
        return Kajian::where('fup_id', $this->id)->get();
    }
}
