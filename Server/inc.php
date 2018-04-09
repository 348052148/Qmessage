<?php

include_once '../MessageQueue/iMessageQueue.php';
include_once '../MessageQueue/RedisMessageQueue.php';
include_once '../MessageQueue/MessageQueueFactory.php';

include_once '../Contract/iContract.php';
include_once '../Contract/RedisContract.php';
include_once '../Contract/ContractFactory.php';

include_once 'MessageHandler/iMessageHandler.php';
include_once 'MessageHandler/WxMessageHandler.php';
include_once 'MessageHandlerFactory.php';

include_once 'MessageServer.php';

$server = new MessageServer();
$server->run();