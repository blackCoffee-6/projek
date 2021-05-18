<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;

class FUP extends Model
{
    protected $table = 'fups',
    $fillable = ['id', 'user_id', 'bidang_id', 'no_usulan', 'produk', 'date', 'ket_ketentuan', 'ket_usulan',
                'ket_alasan', 'ch_sifat', 'pic_asman', 'pic_nama', 'pic_date', 'cip_manager', 'cip_nama', 'cip_date', 'file'];

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
