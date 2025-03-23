<?php
// If accessed directly, deny access.
defined('ABSPATH') || exit;

class Starter_Plugin_Main {
    public function __construct() {
        // You can load the translated texts here.
        load_plugin_textdomain('starter-plugin', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }

    public function run() {
        // Loads admin functions
        if (is_admin()) {
            require_once STARTER_PLUGIN_PATH . 'admin/class-admin.php';
            $admin = new Starter_Plugin_Admin();
            $admin->init();
        }

        // Loads frontend functions
        require_once STARTER_PLUGIN_PATH . 'public/class-public.php';
        $public = new Starter_Plugin_Public();
        $public->init();
    }
}
