<?php

/* this file will be used to remove all traces of this plugin when uninstalled */

//if uninstall not called from WordPress do exit

if( !defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
    exit;

/*
 * remove the database entry created by this plugin
 */
if(get_option( 'ank_google_map' ) ) {
    delete_option('ank_google_map');
}
