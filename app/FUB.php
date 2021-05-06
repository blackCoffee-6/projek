<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FUB extends Model
{
    //model yang menghubungkan table bidangs ke table fups
    protected $table = "tr_approval_bidang";

    protected $guarded = ["id"];

}
