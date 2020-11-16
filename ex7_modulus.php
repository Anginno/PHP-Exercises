<?php
/*
Filename: ex7_modulus.php
Author: Angelo T. Innocente
Date Created: 9 March 2017
Last Updated: 9 March 2017
Description: A script to test the modulus in php
*/

//random number generater

$num = rand(-10, 10);

if ($num >= 1) {
	
	echo "Your number is positive: $num <br><hr><br>";
}

elseif ($num == 0) {
	
	echo "Your number is zero: $num <br><hr><br>";
	
}

else {
	
	echo "Your number is negative: $num <br><hr><br>";
}

if ($num == 0) {
	
	echo "Your number is neither odd or even: $num <br><hr><br>";
}

elseif (($num % 2) == 0) {
	
	echo "Your number is even: $num <br><hr><br>";
}

else {
	
	echo "Your number is odd: $num <br><hr><br>";
}
?>