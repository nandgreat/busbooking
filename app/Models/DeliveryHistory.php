<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reference_code',
        'delivery_from',
        'delivery_to',
        'delivery_date',
        'receiver_name',
        'receiver_phone',
        'delivery_amount',
        'delivery_item'
    ];
}
