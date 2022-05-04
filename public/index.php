<?php
require_once __DIR__.'/../vendor/autoload.php';

use Illuminate\Container\Container;

try {

    $container = new Container();
    
//    $testFileInstance = $container->make('App\Models\TestFile');
//    $testFileInstance->find('1');

//    1. 의존성 주입 도구(서비스 컨테이너)란?
//    $instance = $container->make(TestService::class); // PHP 5.5부터 사용 가능
//    $instance = $container->make('App\Services\TestService');
//
//    $modelInstance = new \App\Models\Test();
//    $RedisInstance = new \App\Models\Redis();
//    $repositoryInstance = new \App\Repositories\TestRepository($modelInstance, $RedisInstance);
//    $instance = new \App\Services\TestService($repositoryInstance);


//    2. 서비스 컨테이너 싱글톤과 바인드의 차이점, 활용
//    $container->singleton('App\Services\TestService');
////    $container->bind('App\Services\TestService');
//
//    $instance = $container->make('App\Services\TestService');
//    $instance2 = $container->make('App\Services\TestService');
//
//    $instance->item = 'aaa';
//    $instance2->item = 'bbb';
//    echo "<br>" . $instance->item;
//    echo "<br>" . $instance2->item;


//    모델을 통해 DB & Cache 접근 방법
//    $container->singleton('App\Models\Redis');

//    $serviceInstance = $container->make('App\Services\TestService');
//    $serviceInstance2 = $container->make('App\Services\TestService');
//
//    echo "<br>" . $serviceInstance->getRedis('a', 'a');
//    echo "<br>" . $serviceInstance2->getRedis('b', 'a');
//    echo "<br>" . $serviceInstance->getRedis('a', 'a');
//
//    echo "<br>" . $serviceInstance2->getItem();



    //    $redisInstance = $container->make('App\Models\Redis');
//    $redisInstance2 = $container->make('App\Models\Redis');
//
//    $redisInstance->item = 'aaa';
//    $redisInstance2->item = 'bbb';
//    echo "<br>" . $redisInstance->item;
//    echo "<br>" . $redisInstance2->item;

}
catch ( Exception $e) {
    var_dump($e->getMessage() . " - " .$e->getFile() . " : " .$e->getLine());
}
