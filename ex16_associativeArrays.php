<?php
/*
Filename: ex16_associativeArrays.php
Author: Janet Bott 1234567
Date Created: 9 March 2016
Last Updated:
Description: A script to test various associative arrays.
*/

// **********************************************************************************
// STUDENTS ARE TO COMPLETE THE CODE FOR EACH OF THE 6 INSTRUCTIONS
// **********************************************************************************

// *************
// INSTRUCTION 1
// *************
echo "<h3>STUDENT NAMES</h3>";
/* Create an associative array containing the first and last names of students in the class.  Make the last name the key value.  Then use a foreach loop to read the array and display each full name on a separate line */

$fullName = array("Innocente" => "Angelo", "Thomas" => "Mitchell", "Matthew" => "Raw", "Gozali" => "Alec", "Jaijaroen" => "Timeme", "Florence" => "Chau", "Mutts" => "Geoff", "Wassay" => "Abdul" );

foreach ($fullName as $key => $value) {
	echo "$key $value<br>";
}






// *************
// INSTRUCTION 2
// *************
echo "<h3>AVERAGE CLASS SIZE</h3>";
/* create an associative array of five elements where the key is a class code (ie: h1, h2, h3, h4 and h5) and each key contains a value which represents the number of students in the class (use numbers between 1 and  25.   Then read the array and calculate and display the average class size. */

$class = array("h1" => 20, "h2" => 25, "h3" => 18, "h4" => 15, "h5" => 17);
$length = count($class);
$sum = 0;

//read array and sum each value
foreach ($class as $key => $value) {
	echo "$key Number of students: $value<br>";
	$sum = $sum + $value;
		
}

//calculate and display average

echo "Average amount of students: " .$sum / $length;




// *************
// INSTRUCTION 3
// *************
echo "<h3>GRADES</h3>";
/* create an associative array to represent the grades that students can earn with different marks.   Use the keys "HD", "D", "C", "P" and "N" and the corresponding values "80", "70", "60", "50", "0".  (ie: HD is 80 and above, D is 70 to 79, C is 60 to 69, P is 50 to 59 and N is 0 to 49)  Then use the rand function to generate a random number between 0 and 100 and then check through the array to get and display the correct grade */

$grades = array("HD" => 80, "D" => 70, "C" => 60, "P" => 50, "N" => 0);
$result = mt_rand(0,100);

//Display the grades and their percentage
foreach ($grades as $key => $value) {
	echo "$key = $value%<br>";
}

foreach ($grades as $key => $value) {
//Tests if the result is greater or eqaul to the percentage
	if ($result >= $value) {
		echo "Your result: $result% $key";
		break;
	}
}




// *************
// INSTRUCTION 4
// *************
echo "<h3>NAME AND ADDRESS</h3>";
/* create an associative array with keys of firstName, lastName, address, suburb, state, postcode and dob.     Add the values Susan, Brown, 3 Green Street, Hawthorn, VIC, 3122 and 20/10/1995 to the array.   Then read the array and display the details of the record in the format of:

Name:  firstName lastName
Address: address
         suburb
         state postcode
Birthday: dob

*/

$detail = array("fName" => "Susan", "lName" => "Brown", "address" => "3 Green Street", "sub" => "Hawthorn", "state" => "VIC", "post" => "3122", "dob" => "20/10/1995");

	echo "Name: $detail[fName] $detail[lName] <br>";
	echo "Address: $detail[address] <br>";
	echo "$detail[sub] <br>";
	echo "$detail[state] $detail[post] <br>";
	echo "Birthday: $detail[dob]";






// *************
// INSTRUCTION 5
// *************
echo "<h3>AVERAGE MARK</h3>";
/* Create an associative array containing the student ids and marks of a class test.  Then use a foreach loop to read the array and calculate the average mark.  Once the average has been established, read the array again and display the ids of the students who bettered the average mark. */

$score = array("01" => 53, "02" => 20, "03" => 92, "04" => 71, "05" => 85);
$length = count($score);
$sum = 0;
//Display student ID and their result
foreach ($score as $key => $value) {
	echo "Student ID: $key <br>";
	echo "Result: $value<br>";
	//adds up the result together into an empty variable
	$sum = $sum + $value;
}
//total marks divided by the amount of students
echo "Average marks: " .$average = $sum / $length ."<br><br>";
echo "Top students: <br>";
//Tests to see which students got above the average markings
foreach ($score as $key => $value) {
	if ($average <= $value) {
		echo "$key <br>";
	}
}




// *************
// INSTRUCTION 6
// *************
echo "<h3>CAPITALS</h3>";
/* Create this associative array to store countries and their capital cities.
$world = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

Then read the array and display:
(a) the capital of Sweden
(b) the country where Berlin is the capital
*/

$world = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

echo "The captial of Sweden is $world[Sweden]<br>";
echo "The country with Berlin as the capital is " .array_search("Berlin", $world);






?>