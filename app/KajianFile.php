<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KajianFile extends Model
{
    use HasFactory;

    protected $table = 'kajian_files';
    
    protected $guarded = ['id'];

    public function Kajian(){
        return $this->belongsTo(Kajian::class);
    }
}
