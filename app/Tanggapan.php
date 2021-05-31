<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';

    protected $guarded = ['id'];

    public function FUP(){
        return $this->belongsTo(FUP::class, 'fup_id');
    }

    public function Bidang(){
        return $this->belongsTo(Bidang::class,'bidang_id');
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
