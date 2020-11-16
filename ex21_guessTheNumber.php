<?php session_start()
/*
Filename: ex21_guessTheNumber.php
Author: Angelo T. Innocente
Date Created: 13 April 2017
Last Updated: 13 April 2017
Description: Guess the number
*/

?>

<?php
if (!isset($_POST['submit'])){
	
$_SESSION['number'] = mt_rand(0,100);
$_SESSION['guess'] = array();

}
?>

<h1>Guess the number I'm thinking!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<label>Guess here:</label>
	<input type='number' name='guess' value=''>
	<input type='submit' name='submit' value='Submit'>
	
</form>

<?php
	if(isset($_POST['submit'])) {
		$_SESSION['guess'] = $_SESSION['guess'] + $_POST['guess'];
		if ($_POST['submit'] > $_SESSION['number']) {
			echo "Lower!";
		}
		elseif ($_POST['submit'] > $_SESSION['number']) {
			echo "Higher!";
		}
		else {
			echo "CORRECT!";
		}
	}
	
?>