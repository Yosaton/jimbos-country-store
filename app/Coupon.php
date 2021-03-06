<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public static function findByCode(){
        return self::where('code', $code)->first();
    }

    public function discount($total){
        if($this->type =='fixed'){
            return $this->value. '.00';
        }elseif($this->type == 'percent'){
        //    return ($this->percent_off / 100) * $total;
        return number_format(($this->percent_off / 100) * $total, 2, '.', '');
        }else{
            return 0;
        }
    }
}