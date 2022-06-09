<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function Cat(){
        return $this->belongsTo(Cat::class);
    }

    public function exams(){
        return $this->hasMany(Exam::class);
    }
}
