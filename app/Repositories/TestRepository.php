<?php

namespace App\Repositories;

use App\Models\Test;
use App\Models\Redis;

class TestRepository
{
    /**
     * @var Test
     */
    protected $test;

    /**
     * @var Redis
     */
    protected $redis;

    /**
     * @param Test $test
     * @param Redis $redis
     */
    public function __construct(Test $test, Redis $redis)
    {
        $this->test = $test;
        $this->redis = $redis->connection('default');
    }


    public function testAll()
    {

        return $this->test->find(1);

//        return $this->test->all();
    }

    public function getRedis($key, $value)
    {
        if (is_null($this->redis->get($key))) {
            $this->redis->set($key, $value);
        }

        return $this->redis->get($key);
    }
}