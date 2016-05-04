<?php
// retrieveTweetsByCollection.php

// session_start();

// Only return tweets converted to JSON with POST request on AJAX call and 'candidate' var set

if(isset($_POST['candidates'])){
	
	$candidates = $_POST['candidates'];
	echo $candidates;
	// connect to mongodb
	$m = new MongoClient("127.0.0.1:4321");
	
	// select a database
	$db = $m->tweetsDB;
	
	// select candidate's collection
	$collection = $db->$candidate;
	
	// get all tweets from this collection
	$tweets = $collection->find();
	// $count = $tweets->count();
	// echo $count;
	// close connection to database.
	$m->close();
	
	// return tweets converted to JSON
	// echo json_encode(iterator_to_array($tweets, false), true);
	}
?>