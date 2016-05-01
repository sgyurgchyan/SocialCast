<?php
// retrieveTweetsByCollection.php

// session_start();

// Only return tweets converted to JSON with POST request on AJAX call and 'candidate' var set
if(isset($_POST['candidate'])){
	// store candidate
	$candidate = $_POST['candidate'];

	// connect to mongodb
	$m = new MongoClient("127.0.0.1:4321");
	
	// select a database
	$db = $m->tweetsDB;
	
	// select candidate's collection
	$collection = $db->$candidate;
	
	// get all tweets from this collection
	$tweets = $collection->find();
	
	// close connection to database.
	$m->close();
	
	// return tweets converted to JSON
	return json_encode(iterator_to_array($tweets, false), true);
	}
?>