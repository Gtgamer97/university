<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'surname',
        'personal_id',
        'phone_number',
        'email',
        'address',
        'date_of_birth',
        'sex',
        'address_two',
        'number_of_apartment',
        'bank_account_number',
        'ranks'
    ];

    public $timestamps = false;

    public function subject(){
        return $this->hasMany(Subject::class);
    }
}