<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = 'approvals';

    public function FUP(){
        return $this->hasMany(FUP::class);
    }
}
