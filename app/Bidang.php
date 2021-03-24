<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    protected $table = "bidangs";

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function FUP(){
        return $this->hasMany(FUP::class);
    }
}
