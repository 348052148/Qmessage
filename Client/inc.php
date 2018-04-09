<?php
include_once '../MessageQueue/iMessageQueue.php';
include_once '../MessageQueue/RedisMessageQueue.php';
include_once '../MessageQueue/MessageQueueFactory.php';

include_once '../Contract/iContract.php';
include_once '../Contract/RedisContract.php';
include_once '../Contract/ContractFactory.php';

include_once 'MessageTrigger.php';

MessageTrigger::send('发送者','接受者','你好',MessageTrigger::$Wx);

