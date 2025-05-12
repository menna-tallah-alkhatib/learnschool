<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $guarded=[];
    function stage(){
        return $this->belongsTo(Stage::class);

    }
}
