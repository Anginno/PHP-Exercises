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

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<label>Calculate: <br>
		<input type="text" name="num1">
	</label>
	
	<label>
		<select name='mode'>
			<option value='plus'>+</option>
			<option value='minus'>-</option>
			<option value='divide'>/</option>
			<option value='multiply'>*</option>
	</label>
	
	<label>
		<input type="text" name="num2">
	</label><br>
	
	<input type="submit" name="formSubmit">
</form>

<?php
// test if submit button has been clicked
if (isset($_POST['formSubmit'])) {
	// test if data has been input
	if ($_POST['mode'] && $_POST['num1'] && $_POST['num2']) {
		
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$mode = $_POST['mode'];
	$result;
	
	switch ($mode) {
		case 'plus': $result = $num1 + $num2; break;
		case 'minus': $result = $num1 - $num2; break;
		case 'divide': $result = $num1 / $num2; break;
		case 'multiply': $result = $num1 * $num2; break;
	}
	
	echo "Your calculation: $result";
	
	
	
	}
	else {
		echo "Please enter the calculations";
	} // end of inner if statement
} // end of outer if
?>

