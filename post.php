<?php


    
   
    
    
    //Insert Username
    
    if(!$conn)
    {
        echo 'not connected';
    }
    
    if(!mysqli_select_db($conn,'heroku_cd6b3866e127c21'))
    {
        echo 'database not selected';
    }
    
    
    
    $user_name = $_POST['user_name'];
    
    $sql = "INSERT INTO store (user_name) VALUES ('$user_name')";
    
    
    if(!mysqli_query($conn,$sql))
    {
        echo 'not inserted';
    }
    else {
        echo 'inserted';
    }
    
    
    
    
    
    
    
    mysql_select_db($db,$conn);
$sql2 = "SELECT * FROM  store";

$mydata = mysql_query('$sql2,$conn');

while($record = mysql_fetch_array($mydata)){
    echo "<br>";
    echo  $record['username'];
}


    






?>








