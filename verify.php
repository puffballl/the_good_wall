<?php

require 'private/convar.php';

$query = "SELECT id FROM users WHERE mailadres = ?  AND hash = ?";
$stmt = $mysqli->prepare(&$query);
$stmt->bind_param('ss', $mailadres,$hash);

$mailadres = $_GET['mailadres'];
$hash = $_GET['hash'];
 $stmt->execute();
 $stmt->bind_result($id);
 $row = $stmt->fetch();
 if (!$id){
     echo 'Sorry maar de combinatie van mailadres en hash komt mij niet bekent voor.';
     exit();
 }

$stmt->close();

 $query = "UPDATE users SET active = 1 WHERE id = ?";
 $stmt = $mysqli->prepare($query) or die ('error preparing updating');
 $stmt->bind_param('i',$id);
 $stmt->execute() or die ('error updating');
 echo'je account is geactiveert';