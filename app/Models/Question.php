<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function Exam(){
        return $this->belongsTo(Exam::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
