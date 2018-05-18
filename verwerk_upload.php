<?php

if (isset($_POST['Upload'])){
    $target = "images/".basename($_FILES['fotos']['name']);

    $db = mysqli_connect("localhost","root","","24935_db");

    $image = $_FILES['fotos']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO fotos(fotos, text) VALUES ('$image','$text')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['fotos']['tmp_name'], $target)){
        echo "De foto is geupload.";
    }
    else{
        echo "er is ergens een probleem probeer later opnieuw";
    }

}