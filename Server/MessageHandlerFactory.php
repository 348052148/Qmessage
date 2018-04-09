<?php

/**
 * 消息处理工厂 实现消息投放处理
 * Class MessageHandlerFactory
 */
class MessageHandlerFactory {

    static $Wx = 0;
    static $SMS = 1;
    static $XCX = 2;
    static $DD = 3;

    private function __construct()
    {

    }

    public static function getMessageHanlder($type){

        return new WxMessageHandler();
    }
}