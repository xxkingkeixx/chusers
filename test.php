<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'simple_html_dom.php';
$html = file_get_html("https://www.merriam-webster.com/dictionary/abut");


$title = $html->find("div.card-primary-content",0)->innertext;
echo $title;




?>


