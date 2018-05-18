<?php

require ('private/convar.php');

$mysqli = new mysqli(HOST,USER,PASS,DBNAME);

if (!isset($_POST['submit'])) {
    echo 'Rot op, Jij Schobbejak!';
    exit();
}

if ($mysqli->errno) {
    echo 'Error connecting' . $mysqli->errno;
}

if (empty($_POST['gebruikersnaam']) OR empty($_POST['mailadres']) OR empty($_POST['password1']) OR empty($_POST['password2'])) {
    echo 'Je bent wat vergeten in te vullen.<br>';
    echo '<a href="registreer.php">probeer opniew</a>';
    exit();
}

if ($_POST['password1'] != $_POST['password2']) {
    echo 'De wachtwoorden komen niet overeen.<br>';
    echo '<a href="registreer.php">probeer opniew</a>';
    exit();
}

ini_set('display_errors','On');
$query = "SELECT id FROM users WHERE gebruikersnaam = ?";
$stmt = $mysqli->prepare($query);
$username = $_POST['gebruikersnaam'];
$stmt->bind_param('s',$username);
$result = $stmt->execute() or die ('error querying username.');
$row = $stmt->fetch();
if ($row){
    echo'sorry maar deze gebruiker bestaat al.<br>';
    echo 'Klik <a href="registreer.php">hier</a> om terug te gaan';
    exit();
}

$query = "SELECT id FROM users WHERE mailadres = ?";
$stmt = $mysqli->prepare($query);
$mailadres = $_POST['mailadres'];
$stmt->bind_param('s',$mailadres);
$result = $stmt->execute() or die ('error querying mail.');
$row = $stmt->fetch();
if ($row){
    echo'sorry maar deze gebruiker bestaat al.<br>';
    echo 'Klik <a href="registreer.php">hier</a> om terug te gaan';
    exit();
}

//Gebruiker toevoegen aan database
$query = "INSERT INTO users VALUES (0, ?, ?, ?, ?, 0)";
$stmt = $mysqli->prepare($query)  or die ("Error prep");
$stmt->bind_param('ssss', $username, $mailadres, $password, $hash)  or die ("Error bind");
$username = $_POST['gebruikersnaam'];
$mailadres = $_POST['mailadres'];
$randomnumber = rand(0,1000000);
$hash = hash('sha512', $randomnumber);
$password = hash('sha512', $_POST['password1']);
$result = $stmt->execute() or die ('Error inserting user.');

$to = $_POST['mailadres'];
$subject = 'account verifieeren bij bauhaus';
$message = 'klik op de volgende link om je account te activeren: ';
$message .= 'http://24935.hosts.ma-cloud.nl/bewijzenmap/periode1.3/the_wall/verify.php?mailadres=' . $mailadres . '&hash=' . $hash;
$headers = ': bauhaus beveliging';
mail($to,$subject,$message.$headers) or die ('error mailing');



header('Location: login.php');

