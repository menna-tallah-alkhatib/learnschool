<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
   protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
