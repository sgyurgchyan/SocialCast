<?php
// retrieveTweetsByCollection.php

// session_start();

// is 
// if(isset($_POST['collection'])){
	// connect to mongodb
	$m = new MongoClient("127.0.0.1:4321");
	
	// select a database
	$db = $m->tweetsDB;
	
	// select collection
	$collection = $db->tweets;
	
	// get all tweets from this collection
	$tweets = $collection->find();
	
	// close connection to database.
	$m->close();
	
	// return tweets converted to JSON
	return json_encode(iterator_to_array($tweets, false), true);
// 	}
?>