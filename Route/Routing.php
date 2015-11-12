<?php

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('?', $uri)[0];
echo $uri;
$personal_uri = '/'. explode('/', $uri)[1]. '/'. explode('/', $uri)[2]. '/';
echo $personal_uri;

if ($uri == $personal_uri OR $uri == $personal_uri.'index.php') 
{
	$response = list_action();
}
elseif ($uri == $personal_uri.'index.php/admin') // Админ
{
	$response = admin_action();
}
elseif ($uri == $personal_uri.'index.php/show') // Просмотр
{
	$response = show_action($_REQUEST['id']);
}
elseif ($uri == $personal_uri.'index.php/remove') // Удаление
{
	$response = remove_action($_REQUEST['id']);
}
elseif ($uri == $personal_uri.'index.php/edit') // Редактирование
{
	$response = edit_action($_REQUEST['id']);
}
elseif ($uri == $personal_uri.'index.php/add') // Редактирование
{
	$response = add_action($_REQUEST['id']);
}
// ---------------------------------
//	ДОПОЛНИТЕЛЬНЫЕ СТРАНИЦЫ
// ---------------------------------
elseif ($uri == $personal_uri.'index.php/about')
{
	$response = about_action();
}
else
{
	$response = error_404();
}
?>
