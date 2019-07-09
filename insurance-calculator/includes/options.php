<?php

// Top level menu del plugin
function ic_menu_administrator()
{
 add_menu_page(IC_MENU,"Insurance Calculator",'manage_options',IC_PATH . '/admin/configuration.php');
}

add_action( 'admin_menu', 'ic_menu_administrator' );

?>