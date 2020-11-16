<?php

/*
Filename: 100960971_ex1_helloworld
Author: Angelo T. Innocente
Date Created: 2/03/17
Last Updated: 2/03/17
Description: This is the first PHP exercise
*/

//create a variable
$msg = "Welcome to the first PHP exercise! ";
$name = "Angelo";
$salary = 20000;

// echo statements
echo "<h1>Hello World</h1>";
echo "I hope it works. ";
echo $msg; 
echo "Good Luck $name! ";
echo "<br><br>Your course price = $5000.00";
echo "<br><br>The variable name is \$name";
echo '<br>This text uses one quotation mark<br> Good luck ' .$name .' You are super rad!';
echo "<hr>";

//calculations
$weeklyWage = $salary / 52;

// define a constant
define("TAX_RATE", .10);

$tax = $salary * TAX_RATE;
echo "<br> You have to pay \$$tax on a salary of \$$salary";

echo '<br> Your weekly wage is $' .round($weeklyWage, 2);

echo '<br><br>';
echo 'Your lottery numbers are: <br>';

// generate this weeks tattslotto number
for($count = 1; $count <= 6; $count++) {
	// generate a random number
	$num = mt_rand(1,45);
	
	// display numbers
	echo "$num ";
	
}                    


?>