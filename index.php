<!DOCTYPE html>
<html lang="en">
<head>
<title>Enigma Homepage</title>
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="icon" type="text/x-image" href="favicon.ico">
</head>
<body>
<header>
<div class="head"><img src="./images/logo.png" alt="ENIGMA" title="ENIGMA" width="112" height="40"></div>
</header>
<?php

// Lets create a simple welcome page for users here
// Lets also try to get our cookie from the browser
if(isset($_COOKIE))
{
 if(isset($_COOKIE["ucok"]))
 {
  $ucok = $_COOKIE["ucok"];
 }
}

if(isset($ucok))
{
 // This section is visible to logged in users
?>
<div class="msg">Welcome <b><?php echo $ucok; ?><b></div>
<div class="msg-2">Welcome You Have Successfully Logged In To Your Enigma Account.</div>
<div class="msg-3">Your Login Session Will Expire In 1 Hour.</div>
<?php
}
 else
{
 // This section is only visible to users who are not logged in
?>
<div class="msg">WELCOME GUEST!</div>
<div class="msg-2">Please <a href="login.php">LOGIN</a> Or <a href="register.php">REGISTER</a> To Gain Access!</div>
<?php
}
?>
</body>
</html>