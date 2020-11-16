<?php

/*
Filename: myFunctions.php 
Author: Angelo T. Innocente	
Date Created: 2/03/2017
Last Updated: 2/03/2017
Description: This is an exercise for functions in PHP
*/

// function goes here

function cleanInput($data) {
	
	$data = trim($data); // removes extra spaces, tabs, new lines
	
	$data = stripslashes($data); // remove back slashes
	
	$data = htmlspecialchars($data); // convert special characters to entitiy codes
	
	return $data;
} // ends the cleanInput functions

//=====================================================================================


?>

<?php

	//generating random number (generateNumber is the name of the function)
	
	function generateNumber($min, $max) {
		
		$num = mt_rand($min, $max); //generate the random number between minimum and maximum
		
		return $num; //returns the data back to the called function (generateNumber)
		
	}
	
?>

<?php
	
	//generate and display the date
	function displayDate() {
		//catch the current date today
		$date = date('j/m/Y');
	
	echo $date;
	}
	
	
?>

<?php

	function displayTime() {
		
		$time = date('h:i:sA'); //shows the time h(hours in 12 hour settings) i (minutes with 00-59) s (seconds 00-59)
		
	echo $time;
	}

?>