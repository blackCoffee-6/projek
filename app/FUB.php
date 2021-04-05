<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FUB extends Model
{
    //model yang menghubungkan table bidangs ke table fups
    protected $table = "tr_fup_bidang";

    protected $fillable = ["fup_id", "bidang_id"];

}
