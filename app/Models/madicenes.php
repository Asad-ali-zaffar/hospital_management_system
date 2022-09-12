<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class madicenes extends Model
{
    use HasFactory;
    public static function getLabNameById($id){
        return madicenes::where('madi_id', $id)->pluck('madi_name',)->first();
        //  App\Models\madicenes::getLabNameById($val->lab_no);'Lab_price'
    }
    public static function getLabPriceById($id,$t=null){
        if($t == 1)
        {
            return madicenes::where('madi_id', $id)->pluck('madi_priceP')->first();
        }elseif($t == 2){
            return madicenes::where('madi_id', $id)->pluck('madi_priceS')->first();
        }
        else{
            return madicenes::where('madi_id', $id)->pluck('madi_priceP')->first();
        }
        //  App\Models\madicenes::getLabPriceById($val->lab_no);
    }

}
