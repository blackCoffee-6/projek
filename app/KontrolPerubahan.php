<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KontrolPerubahan extends Model
{
    protected $table = "kontrols";

    protected $guarded = ['id'];

    protected $fillable = [
        //Regulasi
        'ru_tlp', 'ru_pic', 'ru_dok', 'ru_date', 'ru_rencana', 'ru_realisasi'
    ];

    public function FUP(){
        return $this->hasOne(FUP::class);
    }
}
