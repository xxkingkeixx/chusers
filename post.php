<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


   
    
   
    
    
    
    $user_name = $_POST['user_name'];
    
    $sql = "INSERT INTO store (user_name) VALUES ('$user_name')";
    
  
    mysqli_query($conn,$sql);
    
    
    
    mysqli_select_db($conn,'heroku_cd6b3866e127c21');
   $sql2 = "SELECT * FROM store"; $mydata = $mysqli->query($sql2); while($record = $mydata->fetch_assoc()){ echo "<br>"; echo $record['user_name']; }


    






?>








