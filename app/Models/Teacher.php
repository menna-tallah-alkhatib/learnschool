<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    static public function getQualByCode($code)
    {
        if ($code == 'd') {
            return 'دبلوم';
        } elseif ($code == 'b') {
            return 'بكلوريوس';
        } elseif ($code == 'm') {
            return 'ماجستير';
        } else {
            return 'دكتوراه';
        }
    }
}
