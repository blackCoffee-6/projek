<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = 'approvals';
    protected $guarded = ['id'];
    
    public function FUP(){
        return $this->hasOne(FUP::class);
    }

}
