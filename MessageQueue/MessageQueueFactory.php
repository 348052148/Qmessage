<?php

/**
 * 消息队列工厂 可以实现多种消息队列实现来源
 * Class MessageQueueFactory
 */
class MessageQueueFactory {

    private function __construct()
    {
    }

    public static function getQueue(){

        return new RedisMessageQueue();
    }
}