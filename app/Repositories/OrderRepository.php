<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository
{
    protected const MODEL = Order::class;

    public function getModel(): string
    {
        return static::MODEL;
    }
}
