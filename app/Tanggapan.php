<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';

    protected $guarded = ['id'];

    public function FUP(){
        return $this->hasMany(FUP::class);
    }
}
