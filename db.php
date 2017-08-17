<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
else 
{
    echo " database connection successful.  Details: Server name: %s", $server[0];
}

if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    echo "Default database is %s.\n", $row[0];
    $result->close();
}

?>