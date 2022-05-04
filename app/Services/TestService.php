<?php

namespace App\Services;

use App\Repositories\TestRepository;

class TestService
{
    /**
     * @var TestRepository
     */
    protected $testRepository;
    public $item;

    /**
     * @param TestRepository $testRepository
     */
    public function __construct(TestRepository $testRepository)
    {
        $this->testRepository = $testRepository;
    }

    public function getItem()
    {
        return $this->testRepository->testAll();
    }

    public function getRedis($key, $value)
    {
        return $this->testRepository->getRedis($key, $value);
    }
}