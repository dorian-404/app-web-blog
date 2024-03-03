<?php

namespace Core;

class App {

    protected static $container;

    public static function setContainer($container) {

        static::$container = $container;
    }

    public static function getContainer() {

        return static::$container;
    }

    public static function bind($key, $service) {

        static::getContainer()->bind($key, $service);
    }

    public static function resolve($key) {

        return static::getContainer()->resolve($key);
    }


}