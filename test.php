<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'simple_html_dom.php';
$html = file_get_html("https://www.merriam-webster.com/dictionary/dictionary");
if($html){
    echo 'ok';
}
else
    echo 'um..';
    

$title = $html->find(".definition-inner-item with-sense")->innertext;
echo $title;
if ($title) {
    echo $title[0]->plaintext;
}





?>


