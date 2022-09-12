<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomes extends Model
{
    use HasFactory;
    public static function getRoomById($id){
        return Roomes::where('room_id', $id)->pluck('room_name')->first();
        //  App\Models\Roomes::getRoomById($val->lab_no);
    }
}
