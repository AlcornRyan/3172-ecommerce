<?php

  /*
   *  DO NOT MODIFY
	 *	db.php
	 *	Connects to the Database on localhost.
	 */

	$host = "localhost";
	$un = "root";
	$pw = "";
	$db = "beautybuy";

	$conn = new mysqli($host, $un, $pw, $db);

	if ($conn->connect_error) {
		die ("Error connecting to the DB.<br>" . $conn->connect_error);
	}

?>