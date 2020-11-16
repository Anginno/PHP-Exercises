<?php
/*
Filename: ex11_calculate.php
Author: Angelo T. Innocente
Date Created: 29 March 2017
Last Updated: 29 March 2017
Description: A script for tax
*/

include "includes/myFunctions.php";

?>

<?php
$num = array();
$sum = 0;
$length = count($num);

echo "<strong>Numbers generated: </strong><br>";
//creating random 5000 words
for ($i=1;$i<=5000;$i++) {
	
	//random numbers from 1-45
	$rand = mt_rand(1,45);
	//adds the numbers into the variable. $i being the numbers generated
	$num[$i] = $rand;
	echo "$rand <br>";
	//adds the random numbers together
	$sum = $sum + $rand;
}

echo "<strong>Average of the sum:</strong>" .$sum / $length ."<br>";
echo "<strong>Sum of all numbers:</strong> $sum<br>";

if ($rand == 13) {
	echo "<strong>number of times 13 was generated:</strong> $rand<br>";
}


?>