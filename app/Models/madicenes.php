<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madicenes extends Model
{
    use HasFactory;
    public static function getLabNameById($id){
        return Madicenes::where('madi_id', $id)->pluck('madi_name',)->first();
        //  App\Models\Madicenes::getLabNameById($val->lab_no);'Lab_price'
    }
    public static function getLabPriceById($id,$t=null){
        if($t == 1)
        {
            return Madicenes::where('madi_id', $id)->pluck('madi_priceP')->first();
        }elseif($t == 2){
            return Madicenes::where('madi_id', $id)->pluck('madi_priceS')->first();
        }
        else{
            return Madicenes::where('madi_id', $id)->pluck('madi_priceP')->first();
        }
        //  App\Models\Madicenes::getLabPriceById($val->lab_no);
    }

}
