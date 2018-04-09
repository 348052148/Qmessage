<?php

class RedisMessageQueue implements iMessageQueue{

    public function __construct()
    {
        //redis 实例
//        $config = array(
//            'host' => '127.0.0.1',
//            'port' => 6379,
//            'timeout' => 1000,
//            'pconnect' => false,
//            'name' => 'msg'
//        );
        $this->redis = new \Redis();
        $this->redis->pconnect('127.0.0.1', 9736, 1);
        $this->redis->auth('194ce5d0b89c47ff6b30bfb491f9d177');
        //设置队列
        $this->chanel = 'msg_queue';

        $this->timeout = 30;
    }

    public function pop()
    {
        return $this->redis->brPop($this->chanel, $this->timeout);
    }

    public function push($msg)
    {
        return $this->redis->lPush($this->chanel, $msg);
    }

    public function len()
    {
        return $this->redis->lLen($this->chanel);
    }
}