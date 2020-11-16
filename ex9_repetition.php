<?php
/*
Filename: ex9_repetition.php
Author: Janet Bott 1234567
Date Created: 9 March 2016
Last Updated:
Description: A script to test repetition scenarios
*/

// ***********************************************************************************
// STUDENTS ARE TO COMPLETE THE CODE FOR EACH OF THE 7 INSTRUCTIONS
// ***********************************************************************************

// *************
// INSTRUCTION 1
// *************
echo "<h3>WHILE LOOP</h3>";
/* write a while loop to output the numbers between 0 and 10 */

$num = 0;

while ($num <= 10) {
	echo "$num <br>";
	$num++;
}







// *************
// INSTRUCTION 2
// *************
echo "<h3>ANOTHER WHILE LOOP</h3>";
/* write a while loop to output all the hundred numbers between 0 and 2000 */


$num = 0;

while ($num <= 2000) {
	echo "$num <br>";
	$num = $num + 100;
}







// *************
// INSTRUCTION 3
// *************
echo "<h3>DO ... WHILE LOOP</h3>";
/* write a do ... while loop to output a grid of 10 rows by 10 columns, containing # symbols */

$columns = 1;

do {
	echo "<br># # # # # # # # # #";
	$columns++;
}
while ($columns <= 10);








// *************
// INSTRUCTION 4
// *************
echo "<h3>ANOTHER DO ... WHILE LOOP</h3>";
/* write a do ... while loop to output the numbers from 20 to 35 inclusive */

$num = 20;

if ($num >= 20) {
	
do {
	echo "$num<br>";
	$num++;
}
while ($num <=35);

}





// *************
// INSTRUCTION 5
// *************
echo "<h3>FOR LOOP</h3>";
/* write a for loop to output the even numbers between 0 and 400 */

$num = 0;

for ($num=0;$num<=400;$num=$num+2){
	echo "$num<br>";
}









// *************
// INSTRUCTION 6
// *************
echo "<h3>ANOTHER FOR LOOP</h3>";
/* write a for loop to generate and display 100 random numbers between 1 and 44 */

for($i=1;$i<=100;$i++) {
	$num = mt_rand(1,44);

	echo "$num <br>";
}








// *************
// INSTRUCTION 7
// *************
echo "<h3>AND ANOTHER FOR LOOP</h3>";
/* write a for loop to display the sum of the numbers between 5 and 20 (Hint: The answer is 200 */

$sum = 0;

for($i=5;$i<=20;$i++){
	$sum = $sum + $i;
	
}

echo "$sum <br>";








?>