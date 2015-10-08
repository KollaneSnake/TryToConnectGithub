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
	function render_template($path, array $args)
	{
		extract($args);

	}

?>