<?php
/*
Filename: connect.php
Author: Angelo T. Innocente
Date Created: 16 March 2017
Last Updated: 16 March 2017
Description: A connection file for Maria DB and Mueblas Website
*/

//attempt to connect to mariaDB
try {
	//setting up a store to log credentials
	$user ="s100960971";
	$pass ="201098";
	$host ="feenix-mariadb.swin.edu.au";
	$dbName = "s100960971_db";
	
	//creating an object from the PDO Data Object (pdo) class to establish connection
	$pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
	
	// default mode is silent failure for establishing connections
	// set PDO object error mode to throw exceptions
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	// execute the connection, changing the character set
	$pdo->exec("SET NAMES 'utf8'");
	
	
} // end of try block

// If connection fails... then do this!
catch(PDOException $e) {
	// Creating a suitable error message including exception details
	echo "Unable to connect to the database: " .$e->getMessage();
	
	// Stops the script continuing
	exit();
} //end of catch block

//for testing purposes (comment out when live)
//echo "Succesfully connected to MariaDB";

?>