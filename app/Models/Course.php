<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public function uniclass(){
        return $this->hasMany(Uniclass::class);
    }
    public function major(){
        return $this->hasMany(Major::class);
    }
}
