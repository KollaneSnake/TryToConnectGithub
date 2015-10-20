<?php

	echo $_SERVER['REQUEST_URI'];

	$uri=$_SERVER['REQUEST_URI'];

	$u=explode('?', $uri);

	$uri=$u[0];

	$uri= rtrim($uri,"/");

	echo "<br>newUri ".$uri;

	if(($uri=='/2KTVRp_2015/Kiir') OR ($uri=='/2KTVRp_2015/Kiir/index.php'))
	{
		$response=list_action();
	}
	elseif ($uri=='/2KTVRp_2015/Kiir/index.php/admin') 
	{
		$response=admin_action();
	}
	elseif ('/2KTVRp_2015/Kiir/index.php/show'==$uri) 
	{
		$response=show_action($_REQUEST['id']);
	}
	elseif ('/2KTVRp_2015/Kiir/index.php/add'==$uri)
	{
		$response=add_action($_REQUEST['id']);
	}
	elseif ('/2KTVRp_2015/Kiir/index.php/contact'==$uri)
	{
		$response=contact_action();
	}


