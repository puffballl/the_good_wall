<?php

// CHECKEN OF DE GEBRUIKER VERDWAALD IS
if (!isset($_COOKIE['userid'])) {
  header('Location: login.php');
}

// CHECKEN OF DE USERID EN DE HASH EEN MATCH ZIJN IN DE DATABASE
require ('../private/db.php');
$query = "SELECT userid FROM users WHERE userid = ? AND hash = ?";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_param('is', $userid, $hash) or die ('Error binding params.');
$userid = $_COOKIE['userid'];
$hash = $_COOKIE['hash'];
$stmt->execute() or die ('Error executing.');
$fetch_succes = $stmt->fetch();

if (!$fetch_succes) {
  header('Location: uitlogpoort.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Cookies</h1>
    <?php
    echo 'Welkom, je bent ingelogd als gebruiker ' . $_COOKIE['userid'] . '<br>';
    ?>
  </body>
</html>
