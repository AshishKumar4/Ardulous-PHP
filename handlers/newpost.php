
<?php

require_once '../globals.php';
require_once '../Database.php';
define('URL', 'http://127.0.0.1/Ardulous/');

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["login"])) 
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
        $data = json_decode(file_get_contents('php://input'));
		print_r($data->text);
		print_r(DB_createPost($_SESSION['login'], $data));
	} 
} 
else 
{
	header('Location: '.URL.'login_user.php', TRUE, 302);
}
?>

