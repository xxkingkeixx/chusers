<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


   
  if(empty($_POST) ) {
      
         mysqli_select_db($db,$conn);
$sql2 = "SELECT * FROM store"; $mydata = $mydata = mysqli_query($conn,$sql2); 
while($record = $mydata->fetch_assoc()){ echo "<br>"; echo $record['user_name']; }

     exit;
  }   

     
    
    
    
    $query = mysqli_query("SELECT count(*) FROM store WHERE user_name = '$username'");
    
     if(mysqli_fetch_row($query)[0])
  {
       echo 'user exists';
    
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

   

    






?>








