<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;

class FUP extends Model
{
    protected $table = 'fups';
    
    protected $guarded = ['id'];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Approval(){
        return $this->belongsTo(Approval::class)->orderBy('decision', 'DESC');
    }

    public function Bidang(){
        return $this->belongsTo(Bidang::class);
    }

    public function Tanggapan(){
        return $this->belongsTo(Tanggapan::class);
    }

    public function Kajian(){
        return $this->belongsTo(Kajian::class);
    }

    public static function getId(){
        return $getId = DB::table('fups')->orderBy('id', 'DESC')->take(1)->get();
    }
}
