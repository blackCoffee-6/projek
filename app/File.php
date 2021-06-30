<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';
    
    protected $guarded = ['id'];

    public function FUP(){
        return $this->belongsTo(FUP::class);
    }
}
