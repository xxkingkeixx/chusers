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



$exploded = preg_split('@/@', '1/2//3/', NULL, PREG_SPLIT_NO_EMPTY);
echo array_values($exploded);
   
  if(empty($_POST) ) {
    
     die(); 

  }
  
      else
        {
     $Input = explode(',', 'a, b, c, d, e, f, g');
$Query = 'INSERT INTO store(user_name) VALUES ($input)';

foreach ($Input as $Entry)
{
    $Query .= '("' . $Entry . '"), ';
}

$Query = substr_replace($Query, '', -2);

mysqli_query($Query);
         
       
      
}    
            
        
      
?>