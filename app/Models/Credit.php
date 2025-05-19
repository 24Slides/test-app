<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property $account_id
 * @property $amount
 */
class Credit extends Model
{
    /** @use HasFactory<\Database\Factories\CreditFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'account_id',
        'amount'
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
