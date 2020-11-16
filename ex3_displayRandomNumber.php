<?php

/*
Filename: ex3_displayRandomNumber.php 
Author: Angelo T. Innocente	
Date Created: 8/03/2017
Last Updated: 8/03/2017
Description: This is an exercise for random number functions in PHP
*/

// copy the myFunctions.php file into this script so we can call the cleanInput function
 include "includes/myFunctions.php";
 ?>
 
 <form action="<?php echo mt_rand($_SERVER["PHP_SELF"]);?>" method="post">
	Insert minimum number:<br>
	<input type='text' name='minimum'><br>
	Insert maximum number:<br>
	<input type='text' name='maximum'><br>
	
	<input type='submit' name='submit'>

 </form>
 
 <?php
	
	if (isset($_POST['submit'])) {
		
		//captures the input from the form and cleans
		$min = cleanInput($_POST['minimum']);
		$max = cleanInput($_POST['maximum']);
		
		//generates random number
		$random = generateNumber($min, $max);
		
		//display output
		echo "Your random number is: " .$random;
		
	}
 ?>
	
