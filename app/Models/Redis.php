<?php

namespace App\Models;

use Illuminate\Redis\Database as BaseRedis;

include_once __DIR__ . '/../../srv/config.php';

class Redis extends BaseRedis
{
    protected $servers = [
        'default' => [
            'scheme'   => 'tcp',
            'host'     => REDIS_HOST,
            'port'     => REDIS_PORT,
            'timeout' => 10,
            'throw_errors' => false
        ]
    ];
    public $item ='null';

    public function __construct()
    {
        parent::__construct($this->servers);
    }
}