<?php

namespace Inc;

use Inc\Base\Enqueue;

class Init
{
    public static function get_services()
    {
        return array(
            Enqueue::class
        );
    }
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::initiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    public static function initiate($class)
    {
        return new $class;
    }
}
