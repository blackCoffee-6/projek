<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KontrolPerubahan extends Model
{
    protected $table = "kontrols";

    protected $guarded = ['id'];

    public function FUP(){
        return $this->hasOne(FUP::class);
    }
    
    public function KopFiles(){
        return $this->hasOne(KopFile::class);
    }
}
