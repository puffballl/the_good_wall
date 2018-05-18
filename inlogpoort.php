<?php

// CHECKEN OF DE GEBRUIKER VERDWAALD IS
if (!isset($_POST['submit_login'])) {
  header("location: index.php");
}

// CHECKEN OF DE GEBRUIKER ALLES HEEFT INGEVULD
if (empty($_POST['mailadres']) OR empty($_POST['wachtwoord'])) {
  echo 'Je bent iets vergeten in te vullen.<br>';
  echo 'Klik <a href="login.php">hier</a> om het nog eens te proberen.';
  exit();
}

// CHECKEN OF DE GEBRUIKER BESTAAT (EN OF ZIJN WACHTWOORD KLOPT)
require ('private/convar.php');
$query = "SELECT id, hash, active FROM users WHERE mailadres = ? AND wachtwoord = ?";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_param('ss', $email, $password) or die ('Error binding params.');
$stmt->bind_result($userid, $hash,$active) or die ('Error binding results.');
$email = $_POST['mailadres'];
$password = $_POST['wachtwoord'];
$password = hash('sha512',$password) or die ('Error hashing.');
$stmt->execute() or die ('Error executing.');
$fetch_succes = $stmt->fetch();

if (!$fetch_succes) {
  echo 'Sorry er is iets goed misgegaan.<br>';
  echo 'Je hebt gezocht op mailadres: ' . $email . '<br>';
  echo 'Klik <a href="login.php">hier</a> om het nog eens te proberen.';
  exit();
} else if ($active == 0) {
  echo 'Sorry, je account is nog niet geactiveerd. Check je mailbox (en spam).<br>';
  echo 'Klik <a href="login.php">hier</a> om het nog eens te proberen.';
  exit();
}

setcookie('userid',$userid, time() +3600 *24 *7);
setcookie('hash',$hash, time() + 3600 *24 * 7);
header('Location: home.php');
