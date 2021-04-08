<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FUP extends Model
{
    protected $table = 'fups';

    protected $guarded = ['id'];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Approval(){
        return $this->belongsTo(Approval::class);
    }

    public function Bidang(){
        return $this->belongsTo(Bidang::class);
    }

    public function Product(){
        return $this->belongsTo(Product::class);
    }

    public function Tanggapan(){
        return $this->belongsTo(Tanggapan::class);
    }
}
