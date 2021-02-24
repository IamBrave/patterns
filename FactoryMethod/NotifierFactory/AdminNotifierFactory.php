<?php namespace FactoryMethod\NotifierFactory;

use FactoryMethod\Notifier\GlobalAdminNotifier;

final class AdminNotifierFactory implements NotifierFactory
{
    public function createNotifier(): GlobalAdminNotifier
    {
        return new GlobalAdminNotifier();
    }
}