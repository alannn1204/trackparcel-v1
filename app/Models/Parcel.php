<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $fillable = [
        'tracking_number',
        'customer_name',
        'storage_slot',
        'delivery_date',
        'pickup_date',
        'status',
    ];
}
