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

    function DB_createPost($uid, $postdata)
    {
        try 
        {
            $m = new MongoDB\Client("mongodb://localhost:27017");  
            $db = $m->ardulous;
            $users = $db->users;
            $posts = $db->posts;
            $pp = array("text"=>$postdata->text, "author-id"=>$uid, "time"=>$postdata->time, "stats"=>array("likes"=>array(), "comments"=>array(), "shares"=>array()));
            $ab = $posts->insertOne($pp);
            $pid = $ab->getInsertedId();

            $b = $users->findOne(["_id"=>$uid]);
            $fl = iterator_to_array($b->originals);
            array_push($fl, $pid);
            $org = $fl;
            $fl = iterator_to_array($b->feed);
            array_push($fl, $pid);
            $users->updateOne(["_id"=>$uid], [ '$set' => [ 'feed' => $fl, 'originals' => $org]]);
            return "Done";
        }
        catch (Exception $e)
        {
            print_r($e);
        }
    }

    function DB_popFeeds($uid, $pos, $count)
    {
        $m = new MongoDB\Client("mongodb://localhost:27017");  
        $db = $m->ardulous;
        $users = $db->users;
        $posts = $db->posts;
        $b = $users->findOne(["_id"=>$uid]);

        $fl = $b->feed;
        $o = sizeof($fl);
        if ($pos >= $o )
        {
            return NAN;
        }
        $ll = $o - $pos;
        $feed = array_slice($fl, $ll - min($ll, $count), min($ll, $count));
        $g = array();
        foreach($fl as $i)
        {
            $j = $posts->findOne(["_id"=>$i]);
            if(!$j)
                continue;
            $gh = iterator_to_array($j);
            $gh['post-id'] = (string)$i;
            $gh['_id'] = (string)$i;
            $gh['stats-likes'] = sizeof($j['stats']['likes']);
            if(in_array($uid, $j['stats']['likes']))
                $gh['like-symbol'] = 'glyphicon-heart';
            else $gh['like-symbol'] = "glyphicon-heart-empty";
            array_push($g, $gh);
        }
        return $g;
    }
?>