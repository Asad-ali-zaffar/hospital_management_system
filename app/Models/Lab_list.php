<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab_list extends Model
{
    use HasFactory;
    protected $table="lab_lists";
    protected $primarykey="lb_id ";

     public static function getLabNameById($id){
        return Labes::where('lab_id', $id)->pluck('Lab_name')->first();
        //  App\Models\Lab_list::getLabNameById($val->lab_no);
    }
}
