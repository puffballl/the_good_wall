<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stylereg.css">
    <link rel="stylesheet" type="text/css" href="basestyle.css">
    <title>registreer!</title>
</head>
<body>

<div id="navBalk">
    <br>
    <h2>Registreer</h2>
    <br>
</div>
<br>
<div id="form">

    <form method="post" action="verwerk_reg.php">
        <label>Gebruikersnaam<br><input type="text" name="gebruikersnaam" /></label>
        <br>
        <br>
        <label>Mailadres<br><input type="email" name="mailadres" /></label>
        <br><br>
        <label>Wachtwoord<br><input type="password" name="password1" /></label>
        <br><br>
        <label>Herhaal Wachtwoord<br><input type="password" name="password2" /></label>
        <br><br>
        <input type="submit" name="submit" value="Registreer!" />
    </form>
</div>
<br>
<div id="overig">

    <a id="terug" href="index.html">Terug naar het home scherm.</a>

</div>

<!--<script src="foutmelding.js"></script>-->

</body>
</html>