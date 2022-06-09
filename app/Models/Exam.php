<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function skill(){
        return $this->belongsTo(Skill::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
