<?php

	echo $_SERVER['REQUEST_URI'];

	$uri=$_SERVER['REQUEST_URI'];

	$u=explode('?', $uri);

	$uri=$u[0];

	$uri= rtrim($uri,"/");

	echo "<br>newUri ".$uri;

	if(($uri=='/2KTVRp_2015/Kiir/') OR ($uri=='/2KTVRp_2015/Kiir/index.php/') OR ($uri=='/2KTVRp_2015/Kiir/index.php'))
	{
		list_action();
	}
	elseif ($uri=='/2KTVRp_2015/Kiir/index.php/admin') 
	{
		admin_action();
	}
	elseif ('/2KTVRp_2015/Kiir/index.php/show'==$uri) 
	{
		show_action($_REQUEST['id']);
	}
	elseif ('/2KTVRp_2015/Kiir/index.php/add'==$uri)
	{
		add_action($_REQUEST['id']);
	}
	elseif ('/2KTVRp_2015/Kiir/index.php/contact'==$uri)
	{
		contact_action();
	}


