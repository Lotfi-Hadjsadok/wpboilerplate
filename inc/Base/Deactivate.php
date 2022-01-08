<?php

namespace Inc\Base;

class Deactivate
{
    public static function deactivation()
    {
        flush_rewrite_rules();
    }
}
