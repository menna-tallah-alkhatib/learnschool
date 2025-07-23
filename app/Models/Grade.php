<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $guarded=[];
    function stage(){
        return $this->belongsTo(Stage::class);

    }
    function subjects() {
      return $this->hasMany(Subject::class);
     }
   public static function getStatusByCode($status){
     if($status=='1'){
        return'active';
     }
    return'inactive';
    }
}
