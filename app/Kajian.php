<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    protected $table = "kajians";

    protected $guarded = ['id'];

    protected $fillable = [
        'fup_id', 'ket_up','ru_a', 'ru_b','ri_a', 'ri_b','st_a', 'st_b','me_a', 'val_a', 'val_b','tr_a', 'tr_b','pr_a', 'pr_dok','dok_a', 'dok_b','si_a', 
        'severity1', 'detec1', 'occur1', 'getsev', 'getdet', 'getocc', 'result_dxo',
        'ch_kategori', 'ch_status', 'qa_nama', 'qa_date', 'asman_nama', 'asman_date', 'aq_nama', 'aq_date', 'ch_dis'
    ];

    public function FUP(){
        return $this->hasOne(FUP::class);
    }
}
