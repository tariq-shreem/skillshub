<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    public function Exam(){
        return $this->belongsTo(Exam::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
