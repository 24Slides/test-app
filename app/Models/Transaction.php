<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property $order_id
 * @property $credit_id
 * @property $type
 * @property $amount
 */
class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'credit_id',
        'type',
        'amount',
    ];

    const UPDATED_AT = null;

    public function order(): BelongsTo
    {
        return $this->hasOne(Order::class);
    }

    public function credit(): BelongsTo
    {
        return $this->hasOne(Credit::class);
    }
}
