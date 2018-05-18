<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="basestyle.css">
    <link rel="stylesheet" type="text/css" href="stylehome.css">
</head>
<body>



<div id="navBalk">
<br>
<img src="media/logo.png" alt="logo" id="logo">
    Hallo <?php echo $username ?>
    <a href="uitlogpoort.php">log uit</a>
   <a href="upload.php"> <button class="button"><span>upload </span></button></a>
<br>
</div><div id="barplace"></div>

    <?php
    require ("private/convar.php");
    $mysqli = mysqli_connect(HOST, USER, PASS, DBNAME);

    $query = "SELECT image_id, location, title, description FROM images ORDER BY image_id DESC";
    $stmt = $mysqli->prepare($query) or die ('Error preparing');
    $stmt->bind_result($id, $location, $title, $description) or die ('Error binding resukts');
    $stmt->execute() or die ('Error executing');
    ?>
<?php
echo '<div class="main-wrapper">';
echo '<div class="masonry">';
while ($succes = $stmt->fetch()) {
    echo '<button id="clickImg' . $id . '" class="item"> <img id="img' . $id . '" class="foto"  src="' . $location . '" /></button>';
    echo '<div id="modalImg' . $id . '" class="modal" style="display: none"> 

            <div class="modal-c">
                            <span id="close" class="close' . $id . '">X</span>
                            <br>
                <div class="modal-b">
                    <h1 class="mdTit">' . $title . '</h1>
                    <p class="mdTex">' . $description . '</p>
                    <img class="mdImg" src="' . $location . '" style=" height: 400px;" />
                    <hr>
                  
                    </div>
                    </div>
                    </div>';
    echo '<script>
            var modalImg' . $id . ' = document.getElementById("modalImg' . $id . '");
            var clickImg' . $id . ' = document.getElementById("clickImg' . $id . '");
            var close' . $id . ' = document.getElementsByClassName("close' . $id . '")[0];

            clickImg' . $id . '.addEventListener("click", openMD' . $id . ');
            close' . $id . '.addEventListener("click", closeMD' . $id . ');
            window.addEventListener("click", clickAway' . $id . ');

            function openMD' . $id . '() {
                modalImg' . $id . '.style.display = "block";
               }

            function closeMD' . $id . '() {
                modalImg' . $id . '.style.display = "none";
               }

            function clickAway' . $id . '(e) {
                if(e.target == modalImg' . $id . ')
                modalImg' . $id . '.style.display = "none";
               }
            </script>';
}

echo '</div>';
echo '</div>';


?>

<script src="home.js"></script>
</body>
</html>
