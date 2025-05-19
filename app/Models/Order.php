<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property $account_id
 * @property $amount
 */
class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'account_id',
        'amount'
    ];

    const UPDATED_AT = null;

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
