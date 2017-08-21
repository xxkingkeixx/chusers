<html>
    <body>
<?php use Sunra\PhpSimple\HtmlDomParser;





// Retrieve the DOM from a given URL
$dom = HtmlDomParser::file_get_html('http://www.dictionary.com/browse/banausic');

// Find the DIV tag with an id of "myId"
foreach($dom->find('div.def-list') as $e)
    echo $e->innertext . '<br>';
    // Extract all text from a given cell
echo $dom->find('td[align="center"]', 1)->plaintext.'<br><hr>';
?>

</body>
</html>