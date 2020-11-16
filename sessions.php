<?php session_start();
/*
Filename: displaySessionVariables.php
Author: Janet Bott 1234567
Date Created: 28 March 2016
Last Updated:
Description: Display the current session's
variables (use for development and testing
purposes only).
*/


echo "<h2>Current session variables are:</h2>";
// display all session variables
while ($var = each($_SESSION)) {
printf("%s: %s<br>",$var['key'], $var['value']);
}
echo "<br><br>";
// display contents of the multi-dimensional cart
array ();
if (isset($_SESSION['cart'])) {
echo "cart: ";
print_r($_SESSION['cart']);
}
?>