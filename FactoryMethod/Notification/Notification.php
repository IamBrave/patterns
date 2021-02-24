<?php namespace FactoryMethod\Notification;

abstract class Notification
{
    /**
     * @var string
     */
    public $text;

    public function __construct( string $text )
    {
        $this->text = $text;
    }
}