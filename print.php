<?php
// print usernames    



mysql_select_db($db,$conn);
$sql = "SELECT * FROM  store";

$mydata = mysql_query('$sql,$conn');

while($record = mysql_fetch_array($mydata)){
    echo "<br>";
    echo  $record['user_name'];
}

?>