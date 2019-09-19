<!DOCTYPE html>
<html lang="en">
<head>
<title>Enigma Register</title>
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="icon" type="image/x-image" href="favicon.ico">
</head>
<body>
<header>
<div class="head"><img src="./images/logo.png" alt="ENIGMA" title="ENIGMA" width="112" height="40"></div>
</header>
<div class="wrapper">
<div class="top">REGISTER BELOW</div>
<div id="container">
<?php
if(!isset($_GET["reg"]))
{
 // Do Nothing :D
}
 else
{
 $gr = $_GET["reg"];
 if($gr == "u-taken")
 {
  echo '<div class="error">USERNAME ALREADY EXISTS!</div>';
 }
}
?>
<form action="reg.php" method="POST" autocomplete="off">
<input type="text" name="user" value="" placeholder="USERNAME" required>
<br>
<br>
<input type="password" name="pass" placeholder="PASSWORD" required>
<br>
<input type="submit" value="SIGN UP NOW" name="submit">
<div class="mob">
<p>Already Have An Account?</p>
<br>
<a href="login.php">LOG IN!</a>
</div>
</form>
</div>
</div>
</body>
</html>