<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'major_id',
        'name',
        'surname',
        'personal_id',
        'phone_number',
        'email',
        'address',
        'date_of_birth',
        'sex',
        'address_two',
        'number_of_apartment'
    ];

    public $timestamps = false;

    public function studClassConn(){
        return $this->hasMany(StudClassConn::class);
    }
    public function major(){
        return $this->belongsTo(Major::class);
    }
}
