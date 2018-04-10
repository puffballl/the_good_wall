<?php


$gebruikersnaam = $_POST['gebruikersnaam'];
$mail = $_POST['mail'];
$wachtwoord = $_POST['wachtwoord'];

$dbc = mysqli_connect('localhost','Quinten_R','Mkhf.','24935_db') or die ('error');

$query = "INSERT INTO theWall VALUES (0,'$gebruikersnaam','$mail','$wachtwoord')";

$result = mysqli_query($dbc,$query) or die ('error 2');

mysqli_close($dbc);

if ($result){
    echo 'de registratie is goed gegaan. <br> <a href="login.html">ga naar het inlog scherm</a>';
}
else{
    echo 'de gegevens zijn niet goed toegevoegd, <a href="registreer.php">probeer opnieuw.</a>';
}


