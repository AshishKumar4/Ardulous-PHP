
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
		$count = $data->count;
		$ss = $_SESSION['login'];
		$pos = $data->feedpos;
		$feed = DB_popFeeds($ss, $pos, $count);
		for($i = 0; $i < sizeof($feed); $i++)
		{
			$uid = $feed[$i]['author-id'];
			$pp = DB_getUserInfo($uid);
			$feed[$i]['author-pic'] = $pp['personal']['profile_pic'];
			$feed[$i]['author-name'] = $pp['personal']['name'];
		}
		print_r(json_encode($feed));
//*/
	} 
} 
else 
{
	header('Location: '.URL.'login_user.php', TRUE, 302);
}
?>

