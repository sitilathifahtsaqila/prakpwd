<!DOCTYPE html>
<html lang="en">

<head>

    <title> Upload File </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <form enctype="multipart/form-data" method="post" action="upload.php"> 
    File yang diupload: <input type="file"name="fupload"><br>
    Deskripsi File: <br><textarea name="deskripsi" rows="6" cols="20"></textarea><br>
    <input type=submit value=Upload>
    </form>
    <br>
    <a href ='download.php'>Download</a>

</body>

</html>

