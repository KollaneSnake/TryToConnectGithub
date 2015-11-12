<?php
// ------------------------------------------------
function render_template($path, array $args)
{
	extract($args);
	ob_start();
	require $path;
	$html = ob_get_clean();
	return $html;
}
// ------------------------------------------------
// Загрузка постов
function list_action()
{
	$model= new PostsModel();
	$posts = $model->get_all_posts();
	$html = render_template('View/Templates/list.php', array('posts' => $posts));
	return $html;
}
// Добавление поста
function admin_action()
{
	$html = render_template('View/Templates/admin.php', array());

	if (isset($_POST['submit']) && !empty($_POST['add_title']))
	{
    	add_post();
    	header("location: ../index.php");
	}

	return $html;
}
// Просмотр поста
function show_action($id)
{
	$model= new PostsModel();
	/*$post = get_post($id);*/
	$post = $model->get_post_by_id($id);
	$html = render_template('View/Templates/show.php', array('post' => $post));
	return $html;
}
// Редактирование
function edit_action($id)
{
	$model= new PostsModel();
	$post = get_post($id);
	/*$post = $model->update();*/
	$html = render_template('View/Templates/edit.php', array('post' => $post));

	if (isset($_POST['edit_post']))
	{
    	edit_post($id);
    	header("location: ../index.php/show?id=".$id);
	}

	return $html;
}
function add_action()
{
	
}
// Удаление
function remove_action($id)
{
	$post = remove_post($id);
	header('Location: ../index.php');
}
// ------------------------------------------------
// 		ДОПОЛНИТЕЛЬНЫЕ СТРАНИЦЫ
// ------------------------------------------------
function about_action()
{
	$html = render_template('View/Templates/about.php', array());
	return $html;
}
function error_404()
{
	$html = render_template('View/Templates/error_404.php', array());
	return $html;
}
?>