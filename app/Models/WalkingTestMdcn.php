<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Labes;

class WalkingTestMdcn extends Model
{
    use HasFactory;
    protected $table="walking_test_mdcns";
    protected $primarykey="wtm_id";

    public function getLabes(){
        return $this->hasMany('App\Models\Labes','lab_id','lab_id');
    }

    public function getMdcn(){
        return $this->hasMany('App\Models\madicenes','madi_id','madi_id');
    }

    public static function getLabNameById($id){
        return Labes::where('lab_id', $id)->pluck('Lab_name',)->first();
        //  App\Models\Lab_list::getLabNameById($val->lab_no);'Lab_price'
    }
    public static function getLabPriceById($id,$t=null){
        if($t == 1)
        {
            return Labes::where('lab_id', $id)->pluck('Lab_priceP')->first();
        }elseif($t == 2){
            return Labes::where('lab_id', $id)->pluck('Lab_priceS')->first();
        }else{
            return Labes::where('lab_id', $id)->pluck('Lab_priceP')->first();
        }
        //  App\Models\Lab_list::getLabNameById($val->lab_no);'Lab_price'
    }

}
