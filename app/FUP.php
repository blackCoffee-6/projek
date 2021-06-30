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
    
    public function File(){
        return $this->belongsTo(File::class);
    }

    public static function getId(){
        return $getId = DB::table('fups')->orderBy('id', 'DESC')->take(1)->get();
    }

    public static function IDGenerator($model, $trow, $length = 4, $prefix=0){
        $data = $model::orderBy('id', 'DESC')->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $actial_last_number = ($code/1)*1;
            $increment_last_number = $actial_last_number+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0; $i<$og_length; $i++){
            $zeros = "0";
        }
        return $zeros.$last_number.'/UP/'.date('M').'/'.date('Y');
    }
}
