<?php
//only process the form if POST isn't empty


    
    //Check Connection
    
    if( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
    }
    
    
    //Insert Username
    
    $sql = "INSERT INTO store (user_name) VALUES ( '{$mysqli->real_escape_string($_POST['user_name'])}'";
    
    $insert = $mysqli->query($sql);
    
    
    
    mysql_select_db($db,$conn);
$sql2 = "SELECT * FROM  store";

$mydata = mysql_query('$sql2,$conn');

while($record = mysql_fetch_array($mydata)){
    echo "<br>";
    echo  $record['username'];
}


    






?>








