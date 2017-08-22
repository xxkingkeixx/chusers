<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '/simple_html_dom.php';
$html = file_get_html("http://www.wikihow.com/Adjust-Bass-on-Computer");
if($html){
    echo 'ok';
}
else
    echo 'um..';
    

$title = $html_>find("div#intro",0)->innertext;
echo $title;




?>


