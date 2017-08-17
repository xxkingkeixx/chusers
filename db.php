<?php



 $db = mysqli_init();
$db->ssl_set( '/bd9aa57ef63287-cert.pem', '/bd9aa57ef63287-cert.pem', '/cleardb-ca.pem', null, null);
$db->real_connect('us-cdbr-iron-east-05.cleardb.net', 'bd9aa57ef63287', 'b9e32419', 'heroku_cd6b3866e127c21');

// Check connection
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
else 
{
   printf("Connected to : %s and the DB name is: %s u: %s p: %s" ,$server,$db,$username,$password);
}

if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    echo "Default database is %s.\n", $row[0];
    $result->close();
}

?>