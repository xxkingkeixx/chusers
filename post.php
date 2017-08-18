<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
$user_name = $_POST['user_name']; 


mysqli_select_db($db,$conn);

  if(isset($user_name)){
$mysqli_get_users = mysqli_query("SELECT * FROM store where user_name='$user_name'");

$get_rows = mysqli_affected_rows($conn);

if($get_rows >=1){
echo "user exists";
die();
}

else{
echo "user do not exists";
}



} 
  
?>