<?php

/**
 * Enigma Project
 * 
 * Details: Enigma Registration Page
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
// Sanitize user input to prevent XSS attack aldo it is pointless
$username = htmlspecialchars(trim(stripslashes($_POST["user"])));

// Lets make the real password hidden seems we are storing all info in a text file
$password = sha1($_POST["pass"]);

// Lets check if user is already registered
$path = "db/database.txt";

// Add file content into an array
$file = file($path);

// Then add all it content into a string
$db = implode(" ", $file);

// Search username to see if it exists
// Users can have the same password but not the same username
if(preg_match("/\b{$username}\b/i", $db))
{
 header("Location: register.php?reg=u-taken");
 exit();
}
 else
{
 // Let specify the way the content will look
 $content = $username."\n".$password."\n";

 // Lets write it into a file
 $path = "db/database.txt";

 if(file_exists($path) && is_writable($path))
 {
  // Begin
  $file = fopen($path, "a+");
  fwrite($file, $content);
  fclose($file);
 }
  else
 {
  die("Database File Does Not Exists!!!");
 }

 // Redirect user to login page
 header("Location: login.php?log=success");
 exit();
}
}

// DONE!
?>