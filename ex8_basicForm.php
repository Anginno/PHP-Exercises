<?php
/*
Filename: ex8_basicForm.php
Author: Janet Bott 1234567
Date Created: 14 March 2017
Last Updated:
Description: Working with a basic form in PHP.
*/

// copy the myFunctions.php file into this script so we can call the cleanInput function
include "includes/myFunctions.php";
?>

<!-- INSTRUCTIONS:
Display a basic form to capture a user's first name and age.   When the form's submit button is clicked,  test if any data has been keyed into the form's input fields and if so, display a personalised welcome message.   The 4 sets of xxxxxxxxxxx are to be replaced with the correct code - see the Powerpoint presentation for Forms in PHP -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<label>First Name:
	<input type="text" name="fName">
	</label><br>

	<label>Age:
	<input type="text" name="age">
	</label><br>

	<input type="submit" name="formSubmit">
</form>

<?php
// test if submit button has been clicked
if (isset($_POST['formSubmit'])) {
	// test if data has been input
	if (isset($_POST['fName']) && isset($_POST['age'])) {
		// capture input, sanitize and store in to local variables
		$fName = cleanInput($_POST['fName']);
		$age = cleanInput($_POST['age']);

		// display messages
		echo "Henlo " .$fName ." birb <br>";
		echo "You are " .$age ." years old";
	}
	else {
		echo "Please enter your first name and age";
	} // end of inner if statement
} // end of outer if
?>