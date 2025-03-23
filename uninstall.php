<?php
<<<<<<< HEAD
// If accessed directly, deny access.
defined('ABSPATH') || exit;
=======
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}
>>>>>>> a47efd9c1b6859ed58267d9eef6b28a9638fdc74

// Delete stored options.
delete_option('starter_plugin_options');
