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
  else {
      
     
    
    $user_name = $_POST['user_name'];
    
    $query = mysqli_query("SELECT user_name FROM store WHERE user_name='".$user_name."'");
    
     if (mysql_num_rows($query) != 0)
  {
      
      exit;
  }
  else
  {
     
    
    $sql = "INSERT INTO store (user_name) VALUES ('$user_name')";
    
  
    mysqli_query($conn,$sql);
    
    
    
    
    
    mysqli_select_db($db,$conn);
$sql2 = "SELECT * FROM store"; $mydata = $mydata = mysqli_query($conn,$sql2); 
while($record = $mydata->fetch_assoc()){ echo "<br>"; echo $record['user_name']; }

header("Location: " . $_SERVER["REQUEST_URI"]);
    exit;
}
}
   

    






?>








