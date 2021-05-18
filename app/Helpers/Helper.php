<?php

namespace App\Helpers;

class Helper {

    public static function No_Usulan($model, $trow, $length = 4, $prefix)
    {
        $data_fup = $model::orderBy('id')->first();

        if(!$data_fup){
            $data_length = $length;
            $last_number = '';
        }else{
            $code_data = substr($data_fup->$trow,strlen($prefix)+1);
            $data_last_number = ($code_data/1)*1;
            $increment_last_number = $data_last_number+1;
            $last_number_length = strlen($increment_last_number);
            $data_length = $length - $last_number_length;
            $last_number_length = $increment_last_number;
        }
        $no_usul = "";
        for($i=0; $i<$data_length;$i++){
            $no_usul.="0";
        }
        return $prefix.'-'.$no_usul.$last_number;
    }
}