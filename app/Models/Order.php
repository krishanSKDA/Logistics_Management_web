<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;
use App\Models\Shipment;
class Order extends Model
{
    use HasFactory;
    
   
    protected $fillable = [
        'customer_id',
        'order_number',
        'order_date',
        'receiver_name',
        'order_type',
        'shipping_address',
        'package_size',
        'package_weight',
        'delivery_instructions',
        'status',
    ];
    protected $casts = [
        'order_date' => 'datetime', 
    ];
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    public function shipment()
    {
        return $this->hasOne(Shipment::class,'order_id');
    }

}
