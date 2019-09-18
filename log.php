<?php

/**
 * Enigma Project
 * 
 * Details: Enigma Login Page
 * Author: titaro
 *
 */

/**
 * LETS BEGIN ALL THE FUN STUFF
 */

// Check if users actually submited the form
if(isset($_POST["submit"]))
{
// Lets get started
// Sanitize user input
$logname = htmlspecialchars(trim(stripslashes($_POST["log-user"])));

// Lets read password
$logpass = sha1($_POST["log-pass"]);

// Lets check if user is already registered like we did in reg.php
$dbpath = "db/database.txt";

// Add file content into an array
$filearray = file($dbpath);

// Then add all it content into a string
$db = implode(" ", $filearray);

// Search username to see if it exists
// Users can have the same password but not the same username
if(preg_match("/\b{$logname}\b/i", $db) && preg_match("/\b{$logpass}\b/i", $db))
{
 header("Location: index.php");

 // Create temporary cookie in user browser to help detect their login or sign up status
 // Cookie only lasts for 1 hour
 setcookie("ucok", $logname, time() + 3600, "/");
 setcookie("pcok", $logpass, time() + 3600, "/");
}
 else
{
 header("Location: login.php?log=invalid");
}

}

?>