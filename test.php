<?php 
include 'db.php';

include 'simple_html_dom.php';

$row = mysqli_query($conn, "SELECT user_name FROM (
  SELECT * 
  FROM store 
  ORDER BY user_id DESC
) AS store ORDER BY user_id ASC");

while ($lastusers = mysqli_fetch_array($row)) {
    echo '<br>' .$lastusers["user_name"];
    echo '<br>Definition:<br>';
    $html = @file_get_html("https://www.merriam-webster.com/dictionary/" . $lastusers["user_name"] );
    
    if($html === FALSE) {
        set_error_handler(
    create_function(
        '$severity, $message, $file, $line',
        'throw new ErrorException($message, $severity, $severity, $file, $line);'
    )
);


try {
    file_get_html('https://www.merriam-webster.com/dictionary/" . $lastusers["user_name"]');
}
catch (Exception $e) {
    echo $e->getMessage();
}

restore_error_handler();
    
}
    
    $title = $html->find("div.card-primary-content",0)->innertext;
    echo $title;
    $a = $lastusers["user_name"];
    
      //save definitions to corresponding username 
    $save = mysqli_query($conn, "UPDATE store SET def = '$title' WHERE  user_name = '$a'");
     mysqli_query($conn,$save);
    
    
}






?>


