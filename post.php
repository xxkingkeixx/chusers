<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


    
   
    
    
    
    
    
    
    $user_name = $_POST['user_name'];
    
    $sql = "INSERT INTO store (user_name) VALUES ('$user_name')";
    
    
   
    
    
    
    
    
    
  


    






?>








