<?php namespace FactoryMethod\Notifier;

use FactoryMethod\Notifier\Notifier;
use FactoryMethod\Notification\AdminNotification;

class AdminNotifier implements Notifier
{
    /**
     * @var AdminNotification
     */
    public $notification;

    public function create(string $message): AdminNotification
    {
        return $this->notification = new AdminNotification($message);
    }

    public function send()
    {
        var_dump($this->notification, 'just admin notify');
    }
}