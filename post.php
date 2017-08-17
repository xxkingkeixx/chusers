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

    
}


mysqli_select_db("heroku_cd6b3866e127c21");
$sql2 = "SELECT * FROM  store";

$mydata = mysqli_query('sql1');

while($record = mysql_fetch_array($mydata)){
    echo "<br>";
    echo "$record";
}



?>








