<?php

namespace App\Repositories;

use App\Models\Account;
use App\Models\Credit;

class CreditRepository
{
    protected const MODEL = Credit::class;

    public function getModel(): string
    {
        return static::MODEL;
    }

    public function getCreditLinesByAccount(Account $account): array
    {
        echo __METHOD__;
    }
}
