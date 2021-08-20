<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    protected $table = "kajians";

    protected $guarded = ['id'];

    public function FUP(){
        return $this->hasOne(FUP::class);
    }

    public function KajianFiles(){
        return $this->hasOne(KajianFile::class);
    }
}
