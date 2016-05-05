<?php
	$m = new MongoClient("127.0.0.1:4321");
	
	// select a database
	$db = $m->tweetsDB;
	
	// select candidate's collection
	$collection = $db->tweets;
	
	// get all tweets from this collection
	$tweets = $collection->find();

	$validTweets = array();
	foreach ( $tweets as $id => $tweet ){
    	if($tweet["geo"] === null)
    		$emptyGeo++;
    	else{
    		$hasGeo++;
    		array_push($validTweets, $tweet);
    	}
	}
	
	// close connection to database.
	$m->close();
	
	// return tweets converted to JSON
	echo json_encode($validTweets);
?>