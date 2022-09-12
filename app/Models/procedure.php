<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procedure extends Model
{
    use HasFactory;
    public static function getprocedureshareById($id){
        return procedure::where('id',$id)->pluck('share')->first();
    }
    public static function getprocedureById($id){
        return procedure::where('id',$id)->pluck('procedures_name')->first();
        //  App\Models\procedure::getprocedureById($val->lab_no);
    }

}
