<?php

if(isset($_POST['submit'])){
    $con = new mysqli('localhost','root','','stamp-php');

    $year = $con->real_escape_string($_POST['year']);
    $description = $con->real_escape_string($_POST['description']);
    $collection = $con->real_escape_string($_POST['collection']);
    $size = $con->real_escape_string($_POST['size']);
    $album = $con->real_escape_string($_POST['album']);


    
    $con->query("INSERT INTO colection (year,description,collection,size,album) VALUES ('$year', '$description', '$collection', '$size', '$album')");

        
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration page</title>
    </head>
<body>
    

<form method="POST" action="add.php">
    <input name="year" placeholder="Year issued"><br>
    <input name="description" placeholder="Stamp description"><br>
    <input name="collection" placeholder="Name of the collection"><br>
    <input name="size" placeholder="Size (width and Height)"><br>
    <input name="album" placeholder="Album"><br>
    <input name="submit" type="submit" value="Register"><br>
</form>

<a href="index.php">See the collection</a>


</body>
</html>