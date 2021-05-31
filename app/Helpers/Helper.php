<?php

namespace App\Helpers;

class Helper{

    public static function IDGenerator($model, $trow, $length = 4, $prefix){
        $data = $model::orderBy('id', 'DESC')->first();
        // dd($data);
        if(!$data){
            $og_length = $length;
            $last_number = '0001';

            return $last_number.'/'.$prefix.'/'.date('M').'/'.date('Y');
        }else{
            $code = substr($data->$trow, 1, strlen($prefix)+1);
            // dd($data);
            $actial_last_number = ((int)$code);
            // dd($actial_last_number);
            $increment_last_number = ((int)$actial_last_number+1);
            // dd($increment_last_number);
            $last_number_length = strlen($increment_last_number);
            // dd($last_number_length);
            $og_length = $length - $last_number_length;
            // dd($og_length);
            $last_number = $increment_last_number;
            // dd($last_number);

            $zeros = "";
            for($i=1; $i<$og_length+1; $i++){
                $zeros.="0";
            }
            return $zeros.$last_number.'/'.$prefix.'/'.date('M').'/'.date('Y');
        }
    }
}

?>