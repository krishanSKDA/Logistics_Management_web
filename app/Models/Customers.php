<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class Customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'alternative_phone', 
        'customer_address',
        'billing_address', 
        'payment_info',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class,'customer_id');
    }

    public function user()
    {
        return $this-> belongsTo(User::class);
    }
}