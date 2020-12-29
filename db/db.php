<?php

  /*
   *  DO NOT MODIFY
	 *	db.php
	 *	Connects to the Database on localhost.
	 */

	$host = "db.cs.dal.ca";
	$un = "alcorn";
	$pw = "M3qg2VGiii4B7smGdoupmuTa8";
	$db = "alcorn";

	$conn = new mysqli($host, $un, $pw, $db);

	if ($conn->connect_error) {
		die ("Error connecting to the DB.<br>" . $conn->connect_error);
	}

?>