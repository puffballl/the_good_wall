<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="upload.css">
  <head>
    <meta charset="utf-8">
    <title>upload</title>
  </head>
  <body>
<div class="content">

  <div id="taakbalk"><a href="home.php"><img src="img/Logo.png" alt="Logo"></a></div>

    <br> <br> <br> <br>
    <center><font face = "arial black" size = "2"><h1>Uploaden </h1></font/></center> <br>


    <form method="post" action="process_upload.php" enctype="multipart/form-data">

    <div id="upload">
    <input type="file" name="uploaded_image" id="fileToUpload" accept="image/*">
    <label><input name="title" placeholder="Title" id="title"/></label> <br>
    <label><input name="description" placeholder="Beschrijving" id="description"/></label>
    <center><font face = "arial black" size = "2"> <br>  <h2>Sleep hier uw plaatjes in <br> om te uploaden! <br><br><br><br><br> Of klik hier!</h2></font/></center> 
    <input type="submit" value="upload" name="submit"> </div>
    </form>

</div>
  </body>
</html>
