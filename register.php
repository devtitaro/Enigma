<!DOCTYPE html>
<html lang="en">
<head>
<title>Enigma Register</title>
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="icon" type="text/x-image" href="favicon.ico">
</head>
<body>
<div class="wrapper">
<div class="chat bubble top">REGISTER BELLOW</div>
<br>
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
</form>
</div>
</div>
<div class="wrapper-2">
<div class="cov">
<a href="login.php">SIGN IN!</a>
</div>
</div>
</body>
</html>