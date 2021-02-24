<?php namespace FactoryMethod\Notification;

use FactoryMethod\Notification\Notification;

class AdminNotification extends Notification
{
    public function __construct( string $text )
    {
        parent::__construct($text);
    }
}