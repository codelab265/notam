<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'total_amount',
        'payment_status',
        'payment_method',
        'transaction_id',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
