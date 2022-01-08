<?php

namespace Inc\Util;

class Tools
{
    public $plugin_path;
    public $plugin_url;
    public $plugin;
    public $basename;
    public function __construct()
    {
        $this->basename = plugin_basename(dirname(__FILE__, 3));
        $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
        $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
        $this->plugin = $this->basename . '/' . $this->basename . '.php';
    }
    public static function get_url()
    {
        $url = $_SERVER['HTTP_HOST'];
        $params = $_SERVER['REQUEST_URI'];
        $full_url = $url . $params;
        return $full_url;
    }
}
