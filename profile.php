
<?php

require_once 'globals.php';
require_once 'Database.php';

define('URL', 'http://127.0.0.1/Ardulous/');

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["login"])) 
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	} 
	else 
	{
        require 'templates/layout_header.html';
        require 'templates/profile.html';
        require 'templates/layout_footer.html';
    }
} 
else 
{
	header('Location: '.URL.'login_user.php', TRUE, 302);
}
?>

