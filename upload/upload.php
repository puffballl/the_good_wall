<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="upload.css">
  <head>
    <meta charset="utf-8">
    <title>upload</title>
  </head>
  <body>
<div class="content">

  <div id="taakbalk"><a href="home.php"><img src="images/Logo.png" alt="Logo"></a></div>

    <br> <br> <br> <br>
    <center><font face = "arial black" size = "2"><h1>Uploaden </h1></font/></center> <br>
    <form action="verwerk_upload.php" method="post" enctype="multipart/form-data">
    <div id="upload">
    <input type="file" name="image" id="image">
    <center><font face = "arial black" size = "2"> <br> <br> <br> <h2>Sleep hier uw plaatjes in <br> om te uploaden! <br><br><br><input type="text" cols="40" rows="4" placeholder="Een beetje extra caracter bij het plaatje." <br><br><br> Of klik hier!</h2></font/></center> <br> <br>
    <input type="submit" value="Upload" name="submit">
    </div>
    </form>
</div>
  </body>
</html>
