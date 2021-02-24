<?php namespace FactoryMethod\Notifier;

use FactoryMethod\Notifier\Notifier;
use FactoryMethod\Notification\AdminNotification;

class GLobalAdminNotifier implements Notifier
{
    /**
     * @var AdminNotification
     */
    public $notification;

    public function create(string $message): AdminNotification
    {
        $this->notification = new AdminNotification($message);

        return $this->notification;
    }

    public function send()
    {
        var_dump($this->notification);
    }
}