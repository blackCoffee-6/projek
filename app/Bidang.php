<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bidang extends Model
{
    protected $table = "bidangs";
    protected $guarded = ['id'];

    public function User(){
        return $this->hasOne(User::class);
    }

    public function FUP(){
        return $this->hasMany(FUP::class);
    }
    
    public function FUB(){
        return $this->hasMany(FUB::class);
    }
}
