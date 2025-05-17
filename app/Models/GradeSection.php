<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeSection extends Model
{
   protected $guarded=[];
   function section() {
     return $this->belongsTo(Section::class);
    }

}
