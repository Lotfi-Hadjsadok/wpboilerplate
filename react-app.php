<?php

/**
 * Plugin Name: Boilerplate
 * Description: Boilerplate
 * Version: 1.0.0
 * Auhtor: Lotfi Hadjsadok
 */

use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Init;

/*
  This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA. 
  */

if (!defined('ABSPATH')) die;
require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');

register_activation_hook(__FILE__, array(Activate::class, 'activation'));
register_deactivation_hook(__FILE__,  array(Deactivate::class, 'deactivation'));

Init::register_services();
