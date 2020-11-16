<?php

/*
Filename: functions_ex.php 
Author: Angelo T. Innocente	
Date Created: 2/03/2017
Last Updated: 2/03/2017
Description: This is an exercise for functions in PHP
*/

// copy the myFunctions.php file into this script so we can call the cleanInput function
 include "includes/myFunctions.php";
 ?>
 
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<input type="text" name="info">
	<input type="submit" name="submit">
 </form>
 
 <?php
 // test that submit button has been clicked¬
	if (isset($_POST['submit'])) {
 // capture input from form and clean
	$cleanInfo = cleanInput($_POST['info']);
	
 // display cleaned input¬
	echo "Cleaned text: " .$cleanInfo;
 
 // display original input¬
	echo "<br>Original text: " .htmlspecialchars($_POST['info']);
 
	echo "<h3>Note: View the page source to see the conversion of any special characters to HTML entity codes</h3>";
}


?>

