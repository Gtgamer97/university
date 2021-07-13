<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudClassConn extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function uniclass(){
        return $this->belongsTo(Uniclass::class);
    }
}
