<?php

namespace creational\Singleton;

class Singleton
{
    private $props = [];
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if( empty(self::$instance)){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function setProperty(string $key, string $value)
    {
        $this->props[$key] = $value;
    }

    public function getProperty(string $key)
    {
        return $this->props[$key];
    }
}

