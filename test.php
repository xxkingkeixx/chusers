<?php 
include '/simple_html_dom.php';
$html = file_get_html("http://www.wikihow.com/Adjust-Bass-on-Computer");
$title = $html_>find("div#intro",0)->innertext;
echo $title;




?>


