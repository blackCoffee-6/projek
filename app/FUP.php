<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FUP extends Model
{
    protected $table = 'fups';

    protected $guarded = ['id'];

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Approval(){
        return $this->belongsTo(Approval::class, 'approval_id');
    }

    public function Bidang(){
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
