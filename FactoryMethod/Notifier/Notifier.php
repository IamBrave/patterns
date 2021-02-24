<?php namespace FactoryMethod\Notifier;

use FactoryMethod\Notification\Notification;

interface Notifier
{
    public function create(string $message): Notification;

    public function send();
}