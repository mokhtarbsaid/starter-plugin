<?php
<<<<<<< HEAD
// If accessed directly, deny access.
defined('ABSPATH') || exit;
=======
>>>>>>> a47efd9c1b6859ed58267d9eef6b28a9638fdc74

class Starter_Plugin_Activator {
    public static function activate() {
        // Set default tables or options.
        if (!get_option('starter_plugin_options')) {
            update_option('starter_plugin_options', [
                'setting_1' => 'default_value',
            ]);
        }
    }
}
