<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    // Define the fields that can be mass assigned
    protected $fillable = [
        'order_id',
        'tracking_number',
        'carrier',
        'shipped_date'
    ];

    /**
     * Relationship: A Shipment belongs to an Order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
