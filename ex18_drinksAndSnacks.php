<?php 
/*
Filename: index.php
Author: Angelo T. Innocente
Date Created: 22 March 2017
Last Updated: 22 March 2017
Description: Home page for the Mueblas furniture website
*/

?>

<?php

$drinks = array("Lochness" => 3.50, "Fanta" => 2.50, "Coke" => 2.50, "Sprite" => 3.69, "Green Tea" => 4.20,
"Black Tea" => 4.20, "Milk" => 5.00, "Orange Juice" => 4.99, "Sno-Drop" => 3.00, "Lift" => 2.99);

$snacks = array("Thins" => 4,99, "Doritos" => 4.20, "Popcorn" => 2.89, "Yoghurt" => 3.00, "Oreos" => 4.20,
"Corn chips" => 2.99, "Rice Crackers" => 3.30, "Tim Tams" => 5.00, "Twisties" => 3.69, "Nerds" => 2.00);

$s = 0;
$d = 0;
$total = 0;
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<h2>Drinks</h2>
<select name='drinks'>
<?php
foreach ($drinks as $key => $value) {
	
	echo '<option value="'.$key.'">'.$key.'</option>';
	
}
?>
</select>

<h2>Snacks</h2>
<select name='snacks'>
<?php
foreach ($snacks as $key => $value) {
	
	echo '<option value="'.$key.'">'.$key.'</option>';
	
	
}
?>
</select>
<input type="submit" name="formSubmit">
</form>

<?php
	if(isset($_POST['formSubmit'])) {
		echo "Price: $".$total = $d + $s;
	}
	
?>