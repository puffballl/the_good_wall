<?php

if (isset($_COOKIE['userid'])) {
    header('Location: home.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <title>Log In</title>
  </head>
  <body>
<div class="content">
<br> <br>
<center><font face = "arial black" size = "2"><h1>Log In</h1></font/></center>
  <div id="vakje">
    <center><form method="post" action="inlogpoort.php">
        <label><font face = "arial black" size = "2">E-Mail </font/> <br><input type="email" autofocus name="mailadres" id="mailadres" placeholder="E-Mail"  required /> <br> <br>
        <label><font face = "arial black" size = "2">Wachtwoord </font/> <br><input type="password" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord" required/></label> <br> <br>
        <label><input type="checkbox" name="checkbox" value="checkbox"><font face = "arial black" size = "2">Blijf ingelogd</font/> <br> <br></label>
        <input type="submit" name="submit_login" value="Log In" /> <br> <br>
    </form></center>
  </div>
</div>

  </body>
</html>
