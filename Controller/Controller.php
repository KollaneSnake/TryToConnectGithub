<?php
	/**
	* Comment Controller
	*/
	function list_action()
	{
		$posts=get_all_posts();

		require "View/Templates/List.php";
	}
	function admin_action()
	{
		require "View/Templates/admin.php";
	}
	function show_action($id)
	{
		$post=get_post($id);
		require "View/Templates/show.php";
	}
	function add_action($id)
	{
		if (!empty($_POST['add_autor'])) {
			add_post();
		}
		#add_post();
		require "View/Templates/admin.php";
		$posts=get_all_posts();
		require "View/Templates/List.php";
	}
	function contact_action()
	{
		require "View/Templates/contact.php";
	}

?>