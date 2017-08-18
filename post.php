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
  $exploded = preg_split('@,@', $user_name, NULL, PREG_SPLIT_NO_EMPTY);
  foreach ($exploded as $value) {
    echo $value . '<br>';
  }
        }
//$Query = 'INSERT INTO store(user_name) VALUES ($input)';

//foreach ($Input as $Entry)
//{
  //  $Query .= '("' . $Entry . '"), ';
//}

//$Query = substr_replace($Query, '', -2);

//mysqli_query($Query);
         
       
      
//}    
            
        
      
?>