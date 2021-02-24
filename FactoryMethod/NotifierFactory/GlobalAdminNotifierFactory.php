<?php namespace FactoryMethod\NotifierFactory;

use FactoryMethod\Notifier\AdminNotifier;

final class GlobalAdminNotifierFactory implements NotifierFactory
{
    public function createNotifier(): AdminNotifier
    {
        return new AdminNotifier();
    }
}