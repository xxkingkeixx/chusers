<html>
    <body>
<?php use Sunra\PhpSimple\HtmlDomParser; ?>
<?php
// Retrieve the DOM from a given URL
$html = file_get_html('http://www.dictionary.com/browse/banausic');

// Find the DIV tag with an id of "myId"
foreach($html->find('div.def-list') as $e)
    echo $e->innertext . '<br>';
?>

</body>
</html>