<?php

/*
Filename: functions_ex.php 
Author: Angelo T. Innocente	
Date Created: 2/03/2017
Last Updated: 2/03/2017
Description: This is an exercise for functions in PHP
*/

// function goes here

function cleanInput($data) {
	
	$data = trim($data);
	
	$data = stripslashes($data);
	
	$data = htmlspecialchars($data);
	
	return $data;
}

?>