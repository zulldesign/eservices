<?php 
    /*
    Plugin Name: Apphb Chat Display
    Plugin URI: https://www.apphb.com
    Description: Plugin for displaying Chat from an Apphb database
    Author: Zulf
    Version: 1.0
    Author URI: https://www.apphb.com
    */
	
function chaimp_admin()
	{
    include('ChatProductDisplay.php');
	}
 
function chaimp_admin_actions()
	{
    add_options_page("Chat Product Display", "Chat Product Display", 1, "Chat Product Display", "chaimp_admin");
	}
 
	add_action('admin_menu', 'chaimp_admin_actions');
?>