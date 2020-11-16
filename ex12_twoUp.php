<?php session_start()
/*
Filename: ex11_calculate.php
Author: Angelo T. Innocente
Date Created: 29 March 2017
Last Updated: 29 March 2017
Description: A script for tax
*/

?>

<?php

$roll1 = mt_rand(0,1);
$roll2 = mt_rand(0,1);
$nbrOfTosses = 0;
$nbrOfWins = 0;

//testing for session variable and initializing them
if (!isset($_POST['hh']) && !isset($_POST['tt']) && !isset($_POST['ht'])) {
	$_SESSION['nbrOfTosses'] = 0;
	$_SESSION['nbrOfWins'] = 0;
	
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	
	<input type='submit' name='hh' value='Heads Heads'>
	<input type='submit' name='tt' value='Tails Tails'>
	<input type='submit' name='ht' value='Heads Tails'>
	
</form>

<?php

	if (isset($_POST['hh'])) { 
		$_SESSION['nbrOfTosses']++;	
		if ($roll1 == 1 && $roll2 == 1) {
			$_SESSION['nbrOfWins']++;	
			echo "Congratulations, you won!<br>";
		}
		else {
				echo "You Failed!<br>";
			}
	}
	
	if (isset($_POST['tt'])) {
		$_SESSION['nbrOfTosses']++;	
		if ($roll1 == 0 && $roll2 == 0) {
			$_SESSION['nbrOfWins']++;	
			echo "Congratulations, you won!<br>";
		}
		else {
				echo "You Failed!<br>";
			}
	}

	if (isset($_POST['ht'])) {
		$_SESSION['nbrOfTosses']++;	
		if ($roll1 == 1 && $roll2 == 0) {
			$_SESSION['nbrOfWins']++;	
			
			echo "Congratulations, you won!<br>";
		}
		else {
				echo "You Failed!<br>";
			}
	}
	
	echo "<br>Coins: <br>"; 
	
	if ($roll1 == 1) {
	echo "<img src='head.png' width='200' height='200'>";
}
	else {
	echo "<img src='tails.jpg' width='200' height='210'>";
}

	if ($roll2 == 1) {
	echo "<img src='head.png' width='200' height='200'>";
}
	else {
	echo "<img src='tails.jpg' width='200' height='210'>";
}

echo "<br>Times played: ". $_SESSION['nbrOfTosses'];
echo "<br>Games won: ". $_SESSION['nbrOfWins'];
?>
