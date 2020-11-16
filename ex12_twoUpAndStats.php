<?php session_start()
/*
Filename: ex19_TwoUpAndStats.php
Author: Angelo T. Innocente
Date Created: 13 April 2017
Last Updated: 13 April 2017
Description: A script for two up and stats
*/

?>

<?php

$roll1 = mt_rand(0,1);
$roll2 = mt_rand(0,1);

//testing for session variable and initializing them
if (!isset($_POST['hh']) && !isset($_POST['tt']) && !isset($_POST['ht'])) {
	$_SESSION['nbrOfHH'] = 0;
	$_SESSION['nbrOfTT'] = 0;
	$_SESSION['nbrOfHT'] = 0;
	$_SESSION['nbrOfTosses'] = 0;
	$_SESSION['nbrOfWins'] = 0;
	
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	
	<input type='submit' name='hh' value='Heads Heads'>
	<input type='submit' name='tt' value='Tails Tails'>
	<input type='submit' name='ht' value='Heads Tails'>
	<input type='submit' name='reset' value='New Game'>
	
	
</form>

<?php

	if (isset($_POST['hh'])) { 
		$_SESSION['nbrOfTosses']++;	
		$_SESSION['nbrOfHH']++;
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
		$_SESSION['nbrOfTT']++;
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
		$_SESSION['nbrOfHT']++;
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
	echo "HEADS ";
}
	else {
	echo "TAILS ";
}

	if ($roll2 == 1) {
	echo "HEADS ";
}
	else {
	echo "TAILS ";
	}
	
	if (isset($_POST['reset'])){
		session_destroy();
		session_start();
		if (!isset($_POST['hh']) && !isset($_POST['tt']) && !isset($_POST['ht'])) {
			$_SESSION['nbrOfHH'] = 0;
			$_SESSION['nbrOfTT'] = 0;
			$_SESSION['nbrOfHT'] = 0;
			$_SESSION['nbrOfTosses'] = 0;
			$_SESSION['nbrOfWins'] = 0;
	
		}
	}

echo "<br><br>Times played: ". $_SESSION['nbrOfTosses'];
echo "<br>Times HH played: ". $_SESSION['nbrOfHH'];
echo "<br>Times TT played: ". $_SESSION['nbrOfTT'];
echo "<br>Times HT played: ". $_SESSION['nbrOfHT'];
echo "<br>Games won: ". $_SESSION['nbrOfWins']."<br><br>";
?>




