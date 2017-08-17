<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if (!$_POST['user_name']) die();
    
   
    
   
    
    
    
    $user_name = $_POST['user_name'];
    
    $sql = "INSERT INTO store (user_name) VALUES ('$user_name')";
    
  
    mysqli_query($conn,$sql);
    
    
    
    mysqli_select_db($conn,'heroku_cd6b3866e127c21');
    
    mysqli_select_db($db,$conn);
$sql2 = "SELECT * FROM  store";

$mydata = mysqli_query($sql2,$conn);

while($record = mysqli_fetch_array($mydata)){
    echo "<br>";
    echo  $record['user_name'];
}


    






?>








