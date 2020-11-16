<?php
/*
Filename: ex9_simpleForm.php
Author: Janet Bott 1234567
Date Created: 14 March 2017
Last Updated:
Description: Working with a simple form in PHP.
*/

// copy the myFunctions.php file into this script so we can call the cleanInput function
include "includes/myFunctions.php";
?>

<!-- INSTRUCTIONS:
Complete the code to display a simple form to capture a user's first name, last name, address, suburb, state and postcode.   
Make all fields input of type text except for state.    Make state a drop down list.   
When the form's submit button is clicked,  test if any data has been keyed into the form's input fields and if so, display each form control's name and value in a table. -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<label>First Name:
		<input type="text" name="fName">
	</label><br>

	<label>Last Name:
		<input type="text" name="lName">
	</label><br>

	<label>Address
		<input type="text" name="address">
	</label><br>
	
	<label>Suburb
		<input type="text" name="suburb">
	</label><br>
	
	<label>State
		<select name='state'>
			<option value="nsw">NSW</option>
			<option value="vic">VIC</option>
			<option value="qld">QLD</option>
			<option value="sa">SA</option>
			<option value="nt">NT</option>
			<option value="wa">WA</option>
			<option value="act">ACT</option>
			<option value="tas">TAS</option>
		</select>
	</label><br>
	
	<label>
		<input type="text" name="postCode">
	</label><br>
	
	<input type="submit" name="formSubmit">
</form>

<?php
// test if submit button has been clicked
if (isset($_POST['formSubmit'])) {
	// test if data has been input
	if ($_POST['fName'] && $_POST['lName'] && $_POST['address'] && $_POST['suburb'] && $_POST['state'] && $_POST['postCode']) {

	echo 
	
	"<table>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Address</th>
			<th>suburb</th>
			<th>State</th>
			<th>Post Code</th>
		</tr>
		
		<tr>
			<td>" .$_POST['fName'] ."</td>
			<td>" .$_POST['lName'] ."</td>
			<td>" .$_POST['address'] ."</td>
			<td>" .$_POST['suburb'] ."</td>
			<td>" .$_POST['state'] ."</td>
			<td>" .$_POST['postCode'] ."</td>
		</tr>";






	}
	else {
		echo "Please enter all your details";
	} // end of inner if statement
} // end of outer if
?>