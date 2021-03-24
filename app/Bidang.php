<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bidang extends Model
{
    protected $table = "bidangs";

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function FUP(){
        return $this->hasMany(FUP::class);
    }

    public function deleteBidang($id){
        DB::table('bidangs')->where('id', '=', $id)->delete();
    }

}
