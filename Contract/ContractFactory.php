<?php

/**
 * 消息约定 实现约定可以对消息进行个性化处理，且达到client端和server端一致约定
 * Class ContractFactory
 */
class ContractFactory {

    private function __construct()
    {

    }

    public static function getContract(){

        return new RedisContract();
    }
}