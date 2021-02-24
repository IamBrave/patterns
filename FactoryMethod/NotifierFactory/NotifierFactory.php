<?php namespace FactoryMethod\NotifierFactory;

use FactoryMethod\Notifier\Notifier;

interface NotifierFactory
{
    public function createNotifier(): Notifier;
}