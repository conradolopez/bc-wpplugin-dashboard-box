<?php
/**
* Plugin Name: BC Dashboard Box
* Plugin URI: 
* Description: Agrega una caja al dashboard.
* Version: 1.0
* Author: CLS
* Author URI:
**/

add_action('wp_dashboard_setup', 'add_bc_dashboard_box');
  
function add_bc_dashboard_box() {
    global $wp_meta_boxes;
    
    wp_add_dashboard_widget('custom_help_widget', 'Tareas habituales', 'bc_dashboard_box_content');
}
 
function bc_dashboard_box_content() {
    include_once('view.php');
    // echo '<p><a href="'.get_site_url().'/wp-admin/post.php?post=6131&action=edit&lang=es&classic-editor" target="_blank">Editar tasas</a></p>';
}
