<?php 
   // connect to mongodb
   require 'vendor/autoload.php';  
   // Creating Connection  
   

    function DB_validateUser($uid, $pass)
    {
        $m = new MongoDB\Client("mongodb://localhost:27017");  
        //echo "Connection to database successfully";
        // select a database
        $db = $m->ardulous;
        $users = $db->users;

        $res = $users->findOne(["_id"=>$uid]);
        if(password_verify($pass, $res['password']))
            return TRUE;
        else return FALSE;
    }

    function DB_getUserInfo($uid)
    {
        $m = new MongoDB\Client("mongodb://localhost:27017");  
        $db = $m->ardulous;
        $users = $db->users;

        $res = $users->findOne(["_id"=>$uid]);
        //print_r(iterator_to_array($res));
        return $res;
    }
?>