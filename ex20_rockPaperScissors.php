<?php session_start()
/*
Filename: ex20_RockPaperScissors.php
Author: Angelo T. Innocente
Date Created: 13 April 2017
Last Updated: 13 April 2017
Description: ROCK PAPER SCISSORS!
*/

?>

<?php

$roll = mt_rand(1,3);
$r = 1;
$p = 2;
$s = 3;
$computer = "";

if (!isset($_POST['r']) && !isset($_POST['p']) && !isset($_POST['s'])) {
	$_SESSION['gameNbr'] = 0;
	$_SESSION['pWin'] = 0;
	$_SESSION['cWin'] = 0;
	
}

	
?>

<h1> ROCK PAPER SCISSORS </h2>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	
	<input type='submit' name='r' value='Rock'>
	<input type='submit' name='p' value='Paper'>
	<input type='submit' name='s' value='Scissors'>
	
</form>




<?php
//computer randomly picks rock paper scissors after button is pressed
	if (isset($_POST['r']) || isset($_POST['p']) || isset($_POST['s'])) {
		
		$_SESSION['gameNbr']++;
		
		switch ($roll) {
		case 1:
			$computer = "Rock";
			break;
		case 2:
			$computer = "Paper";
			break;
		case 3:
			$computer = "Scissors";
			break;
		}
	}
?>

<?php
	echo "Game No. ".$_SESSION['gameNbr']."/3<br><br>";
?>


<h2>Computer: <?php echo " $computer" ?> </h2>

<?php
	//if user chooses rock
	if (isset($_POST['r'])) {
		//else if statement
		switch ($roll) {
			//if its scissors
			case 3:
				$_SESSION['pWin']++;
				echo "You Win!<br><br>";
				break;
				//if its paper
			case 2:
				$_SESSION['cWin']++;
				echo "You Lose!<br><br>";
				break;
				//if its rock
			case 1:
				echo "Draw!<br><br>";
				break;
		}
	}

	if (isset($_POST['p'])) {
		switch ($roll) {
			case 3:
				$_SESSION['cWin']++;
				echo "You Lose!<br><br>";
				break;
			case 2:
				echo "Draw!<br><br>";
				break;
			case 1:
				$_SESSION['pWin']++;
				echo "You Win!<br><br>";
				break;
		}
	}
	
	if (isset($_POST['s'])) {
		switch ($roll) {
			case 3:
				echo "Draw!<br><br>";
				break;
			case 2:
				$_SESSION['pWin']++;
				echo "You Win!<br><br>";
				break;
			case 1:
				$_SESSION['cWin']++;
				echo "You Lose!<br><br>";
				break;
		}
	}
	
	echo "Player ".$_SESSION['pWin']."- ".$_SESSION['cWin']." CPU<br>";
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	
	<input type='submit' name='reset' value='New Game'>
	
</form>

<?php
//checks to see if the game has been played 3 times
	if ($_SESSION['gameNbr'] == 3) {
		echo "<h2>GAME OVER</h2><br><br>";
		
		//determining winner
		if ($_SESSION['pWin'] > $_SESSION['cWin']) {
			echo "You WIN!";
		}
		elseif ($_SESSION['pWin'] == $_SESSION['cWin']) {
			echo "DRAW!";
		}
		else {
			echo "You LOSE!";
		}
	}
	
?>
