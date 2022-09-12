<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatReferedBy extends Model
{
    use HasFactory;
    public static function getPatReferedById($id){
        return PatReferedBy::where('pat_id', $id)->pluck('name')->first();
        //  App\Models\PatReferedBy::getPatReferedById($val->lab_no);
    }
}
