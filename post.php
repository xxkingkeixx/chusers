<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);



$user_name = $_POST['user_name']; 
   
  if(empty($_POST) ) {
      mysqli_select_db($db,$conn);
$sql2 = "SELECT * FROM store"; $mydata = $mydata = mysqli_query($conn,$sql2); 
while($record = $mydata->fetch_assoc()){ echo "<br>"; echo $record['user_name']; }
     die(); 

  }
  
  else {
      
      $user_name = $_POST['user_name']; 
      if(isset($user_name)){$mysql_get_users = mysql_query("SELECT * FROM store where user_name='$user_name'");
      $get_rows = mysql_affected_rows($conn);
      if($get_rows >=1){
          echo "user exists";
          
          mysqli_select_db($db,$conn);
$sql2 = "SELECT * FROM store"; $mydata = $mydata = mysqli_query($conn,$sql2); 
while($record = $mydata->fetch_assoc()){ echo "<br>"; echo $record['user_name']; }
          die();
      }
      else
        {
            $user_name = $_POST['user_name']; 
            $sql = "INSERT INTO store (user_name) VALUES ('$user_name')";
            mysqli_query($conn,$sql);
            
            mysqli_select_db($db,$conn);
$sql2 = "SELECT * FROM store"; $mydata = $mydata = mysqli_query($conn,$sql2); 
while($record = $mydata->fetch_assoc()){ echo "<br>"; echo $record['user_name']; }
            exit;
            
        }
        }

    






?>








