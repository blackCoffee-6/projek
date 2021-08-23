<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KopFile extends Model
{
    use HasFactory;

    protected $table = 'kop_files';
    
    protected $guarded = ['id'];

    public function KOP(){
        return $this->belongsTo(KontrolPerubahan::class);
    }
}
