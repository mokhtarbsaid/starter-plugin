<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete stored options.
delete_option('starter_plugin_options');
