<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    use HasFactory;
    public static function getDoctoresById($id){
        return Doctores::where('doctor_id', $id)->pluck('name')->first();
        //  App\Models\Doctores::getDoctoresById($val->lab_no);
    }
}
