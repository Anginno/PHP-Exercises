<?php session_start();
/*
Filename: killSessionVariables.php
Author: Janet Bott 1234567
Date Created: 28 March 2016
Last Updated:
Description: Kills the current session's variables (use
for development and testing purposes only).
*/
// unset and destroy all session variables
$_SESSION = array();
session_destroy();
// return to displaySessionVariables file
header("Location: sessions.php");
// force the exit from this file if return fails
exit();
?>