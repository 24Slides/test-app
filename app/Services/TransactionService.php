<?php

namespace App\Services;

use App\Models\Order;

class TransactionService
{
    public function calculate(Order $order, array $creditLines): Collection
    {
        if (/* покриваэмо одним*/) {

        }

        if (/* покриваэмо клькистью*/) {

        }

        if (/* не достатньо */) {
            throw new \Exception();
        }
    }

    public function bulkSave(Collection $transactions): void
    {
        echo __METHOD__;
    }
}
