<?php
namespace App\Helpers;

class Helper
{


    public static function IDGenerator($model, $trow, $length = 4, $prefix){
        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
         $last_numb = substr(str_shuffle("0123456789"), 0, 6);
         $last_number = substr(str_shuffle("0123456789"), 0, 2);
        }else{
          
            $last_numb = substr(str_shuffle("0123456789"), 0, 6);
            $last_number = substr(str_shuffle("0123456789"), 0, 2);
      
        }

        
        return $prefix.''.$last_numb.'-'.$last_number;
    }

    public static function Generator($model, $trow, $length = 4, $prefix){
        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
         $last_number = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
        }else{
            // $code = substr($data->$trow, strlen($prefix)+1);
            // $rand = rand(40);
         
            $last_number = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
            // $code = (int)(substr($data->$trow, strlen($prefix) + 1 ));
            // $actial_last_number = ($code/1)*1;
            // $increment_last_number = ((int)$actial_last_number)+1;
            // $last_number_length = strlen($increment_last_number);
            // $og_length = $length - $last_number_length;
            // $last_number = $increment_last_number;
        }
        // $zeros = "";
        // for($i=0;$i<$og_length;$i++){
        //     $zeros.="0";
        
        return $prefix.'-'.$last_number;
    }
  
}
?>
