<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Name : <?php echo $_GET["name"]; ?> <br>
    Latitude : <?php echo $_GET["lat"]; ?> <br>
    Longtitude :<?php echo $_GET["lon"]; ?>
</form>
  </body>
</html>

<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "map");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    // $name = mysqli_real_escape_string($link, $_GET['name']);
    // $lat = mysqli_real_escape_string($link, $_GET['lat']);
    // $lon = mysqli_real_escape_string($link, $_GET['lon']);

    $name = $_GET['name'];
    $lat =  $_GET['lat'];
    $lon =  $_GET['lon'];

    // attempt insert query execution
    //$delete ="DELETE FROM maping WHERE name = $name";
    $sql = "INSERT INTO maping (name, lat, lon) VALUES ('$name', '$lat', '$lon')";
  //$sql = "UPDATE maping SET name=$name ,lat=$lat ,lon=$lon WHERE name='$name'";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>
