<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $fillable = [
        'tracking_no',
        'customer_name',
        'storage_no',
        'delivery_date',
        'pickup_date',
        'status',
    ];

    public function timelineSteps(): array
    {
        return [
            [
                'key' => 'pending',
                'label' => 'Order Received',
            ],
            [
                'key' => 'ready',
                'label' => 'Ready for Pickup',
            ],
            [
                'key' => 'delivered',
                'label' => 'Done Pickup',
            ],
        ];
    }

    public function isStepCompleted(string $step): bool
    {
        $order = ['pending', 'ready', 'delivered'];

        return array_search($this->status, $order) >= array_search($step, $order);
    }
}
