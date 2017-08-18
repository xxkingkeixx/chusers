<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
 




if (isset($_POST['user_name']))
{
    $user = $_POST['user_name'];

    if (mysqli_num_rows(mysqli_query("SELECT * FROM store WHERE user_name='$user'")))
            echo "Name is taken";
    else echo "Name available";
}
  
?>