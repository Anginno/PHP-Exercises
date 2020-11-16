<?php
/*
Filename: ex15_indexedArrays.php
Author: Janet Bott 1234567
Date Created: 9 March 2016
Last Updated:
Description: A script to test various indexed arrays.
*/

// **********************************************************************************
// STUDENTS ARE TO COMPLETE THE CODE FOR EACH OF THE 4 INSTRUCTIONS
// **********************************************************************************

// *************
// INSTRUCTION 1
// *************
echo "<h3>STUDENT NAMES</h3>";
/* Create an indexed array containing the first names of students in the class.    Then use a for loop to read the array and display each name on a separate line */

$names = array("Mitchell", "Angelo", "Matt", "Abdul" ,"Florence", "Timeme", "Alessandro", "Geoff");
$arrayLength = count($names);

for($index=0; $index < $arrayLength; $index++) {
	echo $names[$index];
	echo "<br>";
}






// *************
// INSTRUCTION 2
// *************
echo "<h3>AVERAGE MARK</h3>";
/* Create an indexed array containing the marks of a class test.  Then use a foreach loop to read the array and calculate and display the average mark */

//arrays
$marks = array(20,23,32,44,49);
$arrayLength = count($marks);
$sum = 0;

//read array and sum each value
foreach ($marks as $value) {
	echo "$value<br>";
	$sum = $sum + $value;
		
}

//calculate and display average

echo "Average marks: " .$sum / $arrayLength;







// *************
// INSTRUCTION 3
// *************
echo "<h3>RANDOM NUMBERS</h3>";
/* Create an empty indexed array and then use a for loop to populate the array with 100 random numbers between 1 and 10.  Then use another for loop to read the array and for each element in the array, output the index value and the value in the format:
Index 0  Value 67
Index 1  Value 5
Index 2  Value 13
Index 3  Value 98
etc
*/

$numbers = array();

for ($index=0; $index<=100; $index++) {
	$rand = mt_rand(1,10);
	$numbers[$index] = $rand;
}

for($index=0; $index < 100; $index++) {
	echo "Index $index Value $numbers[$index]<br>";
}





// *************
// INSTRUCTION 4
// *************
echo "<h3>QUOTE</h3>";
/*  Create this array: $color = array('white', 'green', 'red', 'blue', 'black');
Then display the following quote but make sure the words 'red', 'green' and 'white'  come from the $color array:

"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
*/

$colors = array('white', "green", "red", "blue", "black");

echo "'The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady.' - Richard M. Nixon"
















?>