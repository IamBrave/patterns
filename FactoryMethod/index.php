<?php

require __DIR__ . './../vendor/autoload.php';

use FactoryMethod\UseCase\Credentials\Handler;
use FactoryMethod\NotifierFactory\AdminNotifierFactory;
use FactoryMethod\NotifierFactory\GlobalAdminNotifierFactory;

$handler = new Handler(new AdminNotifierFactory, new GlobalAdminNotifierFactory);
$handler->handle();