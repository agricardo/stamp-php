<?php  

if(isset($_POST['submit'])){
    $con = new mysqli('localhost', 'root', '', 'stamp-php');

    $album = $con->real_escape_string($_POST['album']);

    $stamp = $con->query( "SELECT year, description, collection, size, album FROM colection WHERE album = '$album'");
    
    $arrObj = [];
    while ($data = $stamp->fetch_object()) {
      $arrObj = print_r($data);
      
    }

    // exit;
  
    
}



?>
<!-- *************************************************************************************************************** -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stamp collection</title>
</head>
<body>
<h1>Stamp collection</h1>
<br>
<form method="POST" action="index.php">
<input name="album" placeholder="album"><br><br>
<input name="submit" type="submit" value="find"><br>
</form>

   
    <a href="add.php">Add a new stamp</a>

</body>
</html>