<!DOCTYPE html>
<html lang="en">
<head>
<title>Enigma Login</title>
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="icon" type="text/x-image" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-sale=1">
</head>
<body>
<div class="wrapper">
<div class="chat bubble top">LOGIN BELLOW</div>
<div id="container">
<?php
if(!isset($_GET["log"]))
{
 // Do Nothing :D
}
 else
{
 $gr = $_GET["log"];
 if($gr == "success")
 {
  echo '<div class="success">YOU HAVE SUCCESSFULLY REGISTERED PLEASE LOG IN BELLOW!</div>';
 }

 if($gr == "invalid")
 {
  echo '<div class="error">YOU ENTERED AN INVALID USERNAME OR PASSWORD!</div>';
 }
}
?>
<form action="log.php" method="POST">
<input class="form-control" type="text" name="log-user" value="" placeholder="USERNAME" required>
<br>
<br>
<input class="form-control" type="password" name="log-pass" value="" placeholder="PASSWORD" required>
<br>
<input type="submit" name="submit" value="SIGN IN NOW">
<div class="mob">
<p>Don't Have An Account?</p>
<br>
<a href="register.php">SIGN UP!</a>
</div>
</div>
</form>
</div>
</div>
<div class="wrapper-2">
<div class="cov">
<a href="register.php">SIGN UP!</a>
</div>
</div>
</body>
</html>