<?php

namespace App\Actions\Credit;

use App\Services\CreditService;

class AddAction
{
    public function __construct(protected CreditService $creditService)
    {
    }

    public function __invoke(Request $addCredit)
    {
        $this->creditService->addCredit($addCredit->validate());
    }
}
