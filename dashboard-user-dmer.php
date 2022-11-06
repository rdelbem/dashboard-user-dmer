<?php

/**
 * Plugin Name
 *
 * @package           dashboard-user-dmer
 * @author            Rodrigo Del Bem
 * @copyright         2022 Rodrigo Del Bem
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Dashboard User DMer
 * Plugin URI:        https://example.com/plugin-name
 * Description:       A direct messager plugin to be used in the admin dashboard.
 * Version:           1.0.0
 * Requires at least: 5.5
 * Requires PHP:      7.4
 * Author:            Rodrigo Del Bem
 * Author URI:        https://delbem.net
 * Text Domain:       dashboard-user-dmer
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://delbem.net/plugin/dmer
 */

defined('ABSPATH') || die();

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/php/constants.php';

use DashboardUserDmer\DashboardUserDmer;

if(!class_exists('DashboardUserDmer')){
    add_action('plugins_loaded', function(){
        $dashboardUserDmerInitInstance = new DashboardUserDmer();
        $dashboardUserDmerInitInstance->init();
    });
}