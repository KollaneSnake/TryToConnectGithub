<?php
	/**
	* Comment Controller
	*/
	function list_actions()
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

	function render_template($path, array $args)
	{
		extract($args);
		ob_start();
		require $path;
		$html=ob_get_clean();
		return $html;
	}
	function list_action()
	{
		$posts=get_all_posts();
		$html=render_template('View/Templates/List.php', array('posts' => $posts));

		return $html;
	}