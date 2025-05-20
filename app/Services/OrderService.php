<?php

namespace App\Services;

use App\Repositories\CreditRepository;
use App\Repositories\OrderRepository;

class OrderService
{
    public function __construct(protected OrderRepository $repository)
    {
    }

    public function getRepository(): CreditRepository
    {
        return $this->repository;
    }

    public function create($data): void
    {
        $this->repository->getModel()::create($data);
    }
}
