<?php

    /*
     *  DO NOT MODIFY
	 *	db.php
	 *	Connects to the Database on localhost.
	 */

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

?>