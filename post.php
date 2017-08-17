<?php
//only process the form if POST isn't empty

if( !empty( $_POST) ) {
    print_r($_POST); exit;
    
    //Check Connection
    
    if( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
    }
    
    
    //Insert Username
    
    $sql = "INSERT INTO store (username) VALUES ( '{$mysqli->real_escape_string($_POST['username'])}'";
    
    $insert = $mysqli->query($sql);
    
    
    
    mysqli_select_db($db,$conn);
$sql2 = "SELECT * FROM  store";

$mydata = mysqli_query('$sql2,$conn');

while($record = mysqli_fetch_array($mydata)){
    echo "<br>";
    echo "$record";
}


    
}





?>








