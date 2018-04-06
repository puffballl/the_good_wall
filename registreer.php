<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stylereg.css">
    <title>registreer!</title>
</head>
<form>

<div id="navBalk">
    <br>
    <h2>Registreer</h2>
    <br>
</div>
<br>
<div id="form">
<form action="verwerkreg.php">
    <br>
    Gebruikersnaam:
    <br>
    <input type="text" id="gebruikersnaam">
    <br>
    <br>
    E-mailadres:
    <br>
    <input type="email" id="mail">
    <br>
    <br>
    Wachtwoord:
    <br>
    <input type="password" id="wachtwoord">
    <br>
    <br>
    <input type="checkbox" onclick="showPW()">Laat wachtwoord zien
</div>
    <br>
    <input type="submit" value="Registreer" id="knop">
    <br>
</form>
<br>
<div id="overig">

    <a id="terug" href="index.html">Terug naar het home scherm.</a>

</div>

<script src="foutmelding.js"></script>

</body>
</html>