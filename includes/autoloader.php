<?php
<<<<<<< HEAD
// If accessed directly, deny access.
defined('ABSPATH') || exit;
=======

>>>>>>> a47efd9c1b6859ed58267d9eef6b28a9638fdc74
spl_autoload_register(function ($class_name) {
    if (strpos($class_name, 'Starter_Plugin_') === 0) {
        $file = STARTER_PLUGIN_PATH . 'includes/' . strtolower(str_replace('_', '-', $class_name)) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
});
