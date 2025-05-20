<?php

namespace App\Actions\Credit;

use App\Models\Account;
use App\Services\CreditService;
use App\Services\OrderService;
use App\Services\TransactionService;

class SubtractAction
{
    public function __construct(
        protected OrderService $orderService,
        protected CreditService $creditService,
        protected TransactionService $transactionService
    )
    {
    }

    public function __invoke(Request $request, Account $account)
    {
        DB::transaction(function () use ($request, $account) {
            $order = $this->orderService->create($request->validated());
            $creditLines = $this->creditService->getRepository()->getCreditLinesByAccount($account);
            $transactions = $this->transactionService->calculate($order, $creditLines);
            $this->transactionService->bulkSave($transactions);
        });
    }
}
