<?php

function chaimp_admin()
	{
    include('chat_import_admin.php');
	}
 
function chaimp_admin_actions()
	{
    add_options_page("Chat Product Display", "Chat Product Display", 1, "Chat Product Display", "chaimp_admin");
	}
 
	add_action('admin_menu', 'chaimp_admin_actions');	

?>