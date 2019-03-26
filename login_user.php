<?php

require_once 'globals.php';
require_once 'Database.php';

define('URL', 'http://127.0.0.1/Ardulous/');


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	//header('Location: '.URL.'dashboard.php', TRUE, 302);
	$status = DB_validateUser($_POST['id'], $_POST['pw']);
	if($status)
	{
		$_SESSION["login"] = $_POST['id'];
		$cur = DB_getUserInfo($_POST['id']);
		$_SESSION['userinfo'] = iterator_to_array($cur);
		$_SESSION['personal'] = iterator_to_array($cur['personal']);
		//$_SESSION['connections'] = iterator_to_array($cur['connections']);
		$_SESSION['stats'] = array();
		$_SESSION['stats']['followers'] = sizeof(iterator_to_array($cur['connections']['followers']));
		$_SESSION['stats']['following'] = sizeof(iterator_to_array($cur['connections']['following']));
		$_SESSION['stats']['posts'] = sizeof(iterator_to_array($cur['originals']));
		
		header('Location: '.URL.'dashboard.php', TRUE, 302);
	}
	else 
	{
		echo "Incorrect Username/Password";
	}
}
else 
{
	require 'templates/login_user.html';
}
?>

