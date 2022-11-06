<?php

namespace DashboardUserDmer\php\Enqueue;

defined('ABSPATH') || die();

class Enqueue
{
    public function __construct()
    {
        $this->adminEnqueue();
        //$this->enqueue();
    }

    public function adminEnqueue()
    {
        add_action('admin_enqueue_scripts', function(){

            wp_enqueue_style('plugin-dashboard-user-dmer', );

            wp_enqueue_script('plugin-dashboard-user-dmer', );

        });
    }

    public function enqueue()
    {
        add_action('admin_enqueue_scripts', function(){

            wp_enqueue_style('plugin-dashboard-user-dmer', );

            wp_enqueue_script('plugin-dashboard-user-dmer', );

        });
    }
}
