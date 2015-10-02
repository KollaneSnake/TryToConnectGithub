<?php

	/**
	* Comment DataBase connecct
	*/
function open_database_connection()
{
	#making lonk descriptions
	$link= mysql_connect('localhost','Kiir','123');
	#selecting the db what will use
	mysql_select_db('Kiir_db',$link);
	#make db read normaly russians characters
	mysql_query('SET NAMES utf8');
	#retur connection link
	return $link;
}
	/**
	* Comment DataBase connecct close
	*/
function close_database_connection($link)
{
	#close connection
	mysql_close($link);
}
	/**
	* Comment DataBase query
	*/
function get_all_posts()
{
	#opens connection to db
	$link=open_database_connection();
	#query for db
	$sql="SELECT * FROM Post";
	#giving the query to execute
	$result=mysql_query($sql,$link);
	#making array for placing there result
	$posts=array();
	#if there is still rows add their to posts array
	while ($row=mysql_fetch_assoc($result)) 
	{
		$posts[]=$row;
	}
	#close connection to db
	close_database_connection($link);
	return $posts;
}
function get_all_post($id)
{
	#opens connection to db
	$link=open_database_connection();
	#query for db
	$sql="SELECT * FROM Post WHERE id='$id'";
	#giving the query to execute
	$result=mysql_query($sql,$link);
	#close connection to db
	$post=mysql_fetch_assoc($result);
	close_database_connection($link);
	return $posts;
}