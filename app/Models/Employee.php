<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'position',
        'gender',
        'hire_date',
       
    ];

    protected $casts = [
        'hire_date' => 'date',
    ];
}
