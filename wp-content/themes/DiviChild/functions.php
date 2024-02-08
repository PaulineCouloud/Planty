<?php

add_filter( 'wp_nav_menu_objects', 'add_extra_item_to_nav_menu', 10, 2 );

function add_extra_item_to_nav_menu( $items, $args ) {
    if ( is_user_logged_in() && $args->menu->slug == 'header' ) {
        $admin_link = new WP_Post(new stdClass());
        $admin_link->ID = 'admin-link';
        $admin_link->db_id = null;
        $admin_link->menu_item_parent = 0;
        $admin_link->url = '/wp-admin/';
        $admin_link->title = 'Admin';
        $admin_link->menu_order = count( $items ) - 1; // Pour le placer avant le dernier élément
        $admin_link->type = 'custom';
        $admin_link->object = '';
        $admin_link->object_id = 0;
        $admin_link->classes = array( 'menu-item', 'menu-item-type-custom', 'menu-item-object-custom', 'menu-item-admin' );
        $admin_link->xfn = '';
        $admin_link->target = '';
        $admin_link->current = false;
        array_splice( $items, -1, 0, array( $admin_link ) ); // Insérer avant le dernier élément
    }
    return $items;
}