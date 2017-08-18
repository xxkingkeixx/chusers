<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

 $sql2 = "SELECT * FROM store"; $mydata = $mydata = mysqli_query($conn,$sql2); 
    while($record = $mydata->fetch_assoc()){ echo "<br>"; echo $record['user_name']; } 


$user_name = $_POST['user_name']; 


mysqli_select_db($db,$conn);



   
  if(empty($_POST) ) {
    
     die(); 

  }
  
      else
        {
           
            $array = explode(',', $_POST['user_name']);
            
    $sql="";    
    foreach($array as $tag_name){
       //modify below to add $id along with $tag_name
       $sql="('{$tag_name}'),"; // you need to remove last comma else it will throw mysql error  
    }

    if($sql!=""){
    //rtrim to remove last ',' from string. 
    $sql=rtrim($sql,',');

    $sql="INSERT INTO store (user_name) VALUES {$sql};";
    mysqli_query($conn,$sql);
    
    }
            
           
            
        }   
      
?>