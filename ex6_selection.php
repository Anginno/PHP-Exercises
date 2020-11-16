<?php
/*
Filename: ex6_selection.php
Author: Janet Bott 1234567
Date Created: 9 March 2016
Last Updated:
Description: A script to test 3 selection scenarios
*/

// ***********************************************************************************
// STUDENTS ARE TO COMPLETE THE CODE FOR EACH OF THE 3 SCENARIOS
// ***********************************************************************************


// use the rand function to generate a number between 1 and 100 that is to be  use in the following tests
$num = mt_rand(1,100);

// display the random number
echo "The random number is $num<br><hr><br>";


// **********
// SCENARIO 1
// **********
echo "<h3>SIMPLE IF</h3>";
/* write a simple if statement to test the value of $num and display a message if it is less than 50 */

if ($num < 50) {
	
	echo "The random number is $num<br><hr><br>";
}









// **********
// SCENARIO 2
// **********
echo "<h3>IF ... ELSE</h3>";
/* write a if ... else statement to test the value of $num.    Assume $num is a test mark and display a pass or fail message (50 and above is a pass) */

if ($num > 50) {
	
	echo "Your result is $num. You passed!<br><hr><br>";
}

else {
	
	echo "Your result is $num. You failed!<br><hr><br>";
}







// **********
// SCENARIO 3
// **********
echo "<h3>IF ... ELSEIF ... ELSE</h3>";
/* write an  if ... elseif ... else statement to test the value of $num.   Assume $num is a test mark and display the equivalent grade:
Less than 50  = FAIL
50 to 59 = PASS
60 to 69 = CREDIT
70 to 79 = DISTINCTION
80 and above = HIGH DISTINCTION */


if ($num >= 80) {
	
	echo "HIGH DISTINCTION $num%<br><hr><br>";
}

elseif ($num >= 70) {
	
	echo "DISTINCTION $num%<br><hr><br>";
}

elseif ($num >= 60) {
	
	echo "CREDIT $num%<br><hr><br>";
}

elseif ($num >= 50) {
	
	echo "PASS $num%<br><hr><br>";
}

else {
	
	echo "FAIL $num%<br><hr><br>";
}







?>