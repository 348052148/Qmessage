<?php
class RedisContract implements iContract{

    public function __construct()
    {
        $this->messageQueue = MessageQueueFactory::getQueue();
    }

    public function send($message)
    {
        $this->messageQueue->push(json_encode($message));
    }

    public function build()
    {
        $message = $this->messageQueue->pop();

        if(empty($message)) return false;

        return json_decode($message);
    }
}