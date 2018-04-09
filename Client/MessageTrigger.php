<?php

/**
 * 消息发送客户端接口
 * Class MessageTrigger
 */
class MessageTrigger {

    private function __construct()
    {
    }

    static $Wx = 0;
    static $SMS = 1;
    static $XCX = 2;
    static $DD = 3;

    public static function send($form_user,$to_user,$content,$type){
        $message = [];

        $message['fuser'] = $form_user;

        $message['tuser'] = $to_user;

        $message['content'] = $content;

        $message['type'] = $type;

        return ContractFactory::getContract()->send($message);
    }
}