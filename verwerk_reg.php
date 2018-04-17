<?php

//post-array lezen
$gebruikersnaam = $_POST['gebruikersnaam'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];


//data in de database doen
//verbinden
$dbc = mysqli_connect('localhost','Quinten_R','Mkhf.','24935_db') or die ('error');


//opdracht geven
$query = "INSERT INTO theWall VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";


//opdracht uitvoeren
$result = mysqli_query($dbc,$query) or die ('error 2');

//verbinding verbreken
mysqli_close($dbc);

//bevestiggen
if ($result)
{
    echo 'de volgende dingen zijn toegevoegd: <br>';
    echo $gebruikersnaam .'<br>';
    echo $email .'<br>';
}
else
{
    echo 'nee, het werkt niet';
}
echo '<a href="index.html">Klik hier om naar het inlog scher te gaan.</a>';