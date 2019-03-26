
<?php 
/*
define('URL', 'http://127.0.0.1/Ardulous/');
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	header('Location: '.URL.'dashboard.php', TRUE, 302);
}*/

define('URL', 'http://127.0.0.1/Ardulous/');
//header('Location: '.URL.'dashboard.php', TRUE, 302);
    // connect to mongodb
    echo "hello";
	$m = new MongoClient();
	
	echo "Connection to database successfully";
	// select a database
	$db = $m->mydb;

?>

