<?php
// tweetsFromAWeekAgo.php

// session_start();

	$collection = "tweets";
	// echo $candidate;
	// connect to mongodb
	$m = new MongoClient("127.0.0.1:4321");

	// select a database
	$db = $m->tweetsDB;

	$collection = $db->$collection;

	// get all tweets from this collection
	$tweets = $collection->find();
	$dt = DateTime::createFromFormat('M j H:i:s P Y', 'Jul 25 17:42:55 +0000 2013');
	$date = date("Y-m-d H:i:s", strtotime($date));
	// $count = $tweets->count();
	// echo $count;
	// close connection to database.
	$m->close();

	// return tweets converted to JSON
	echo json_encode(iterator_to_array($tweets, false), true);
?>