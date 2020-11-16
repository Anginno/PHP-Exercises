<?php
/*
Filename: ex8_tax.php
Author: Angelo T. Innocente
Date Created: 9 March 2017
Last Updated: 9 March 2017
Description: A script for tax
*/

include "includes/myFunctions.php";

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	Insert annual salary here:<br>
	<input type="text" name="salary"><br>
	<input type="submit" name="submit">
 </form>
 
<?php

	if (isset($_POST['submit'])){
		
		$salary = cleanInput($_POST['salary']);
		
		$tax = NULL;
		
		switch($salary) {
			case $salary <= 10000;
			$tax = 0;
			break;
		case $salary <= 30001;
			$tax = 0.10;
			break;
		case $salary <= 50001;
			$tax = 0.15;
			break;
		case $salary <= 80001;
			$tax = 0.20;
			break;
		case $salary <= 100001;
			$tax = 0.25;
			break;
		case $salary <= 130001;
			$tax = 0.30;
			break;
		case $salary < 150001;
			$tax = 0.35;
			break;
		default;
			$tax = 0.40;
		}
		echo "Your salary is: $salary<br><br>";
		echo "Your tax is: " .($salary*$tax);
	}
		
?>