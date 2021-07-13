<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uniclass extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function studClassConn(){
        return $this->hasMany(StudClassConn::class);
    }
}
