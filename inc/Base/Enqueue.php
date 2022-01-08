<?php

namespace Inc\Base;

use Inc\Util\Tools;

class Enqueue extends Tools
{
    public function register()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }
    public function enqueue_scripts()
    {
    }
}
