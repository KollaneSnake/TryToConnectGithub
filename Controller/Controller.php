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
		$html =render_template('View/Templates/admin.php', array());
		return $html;
	}
	function show_action($id)
	{
		$post=get_post($id);
		$html= render_template('',array('post'=>$post));
		return $html;
	}
	function add_action($id)
	{
		if (!empty($_POST['add_autor'])) {
			add_post();
		}
		header('location:../index.php');
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
	function remove_action($id)
	{
		$post = remove_post($id);
		header('Location: ../index.php');
	}