<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Drivers extends Model
{
    protected $connection = 'Bridgeway';
    protected $collection = 'Drivers';
   
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'license_number',
        'dob',
        'start_date',
        'availability',
    ];

   
}
