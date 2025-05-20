<?php

namespace App\Services;

use App\Repositories\CreditRepository;

class CreditService
{
    public function __construct(protected CreditRepository $repository)
    {
    }

    public function getRepository(): CreditRepository
    {
        return $this->repository;
    }

    public function addCredit($data): void
    {
        $this->repository->getModel()::create($data);
    }

    public function subtract($data): void
    {

    }
}
