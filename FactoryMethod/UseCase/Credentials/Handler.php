<?php namespace FactoryMethod\UseCase\Credentials;

use FactoryMethod\Notifier\Notifier;
use FactoryMethod\NotifierFactory\NotifierFactory;

class Handler
{
    /**
     * @var Notifier
     */
    private $adminNotifier;

    /**
     * @var Notifier
     */
    private $globalAdminNotifier;

    public function __construct(NotifierFactory $adminNotifierFactory, NotifierFactory $globalAdminNotifierFactory)
    {
        $this->adminNotifier = $this->adminNotifier ?? $adminNotifierFactory->createNotifier();
        $this->globalAdminNotifier = $this->globalAdminNotifier ?? $globalAdminNotifierFactory->createNotifier();
    }
    public function handle()
    {
        if ( true ) {
            $this->adminNotifier->create('success!');
            $this->adminNotifier->send();
            $this->globalAdminNotifier->create('success!');
            $this->globalAdminNotifier->send();
        }
    }
}