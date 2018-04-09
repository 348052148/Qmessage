<?php

/**
 * 消息服务端 监听消息
 * Class MessageServer
 */
class MessageServer {

    public function __construct()
    {
        echo '服务启动';
        $this->contract = ContractFactory::getContract();
    }

    /**
     * $message { type,fuser,tuser,content }
     */
    public function run(){
        while (true){

            $message = $this->contract->build();

            if($message) continue;

            $messageHandler = MessageHandlerFactory::getMessageHanlder($message['type']);

            $messageHandler->handler($message);

        }
    }
}