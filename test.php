<html>
    <body>

<?php

require simple_html_dom.php;
// Retrieve the DOM from a given URL
$html = file_get_html('http://www.dictionary.com/browse/banausic');

// Find the DIV tag with an id of "myId"
foreach($html->find('div.def-list') as $e)
    echo $e->innertext . '<br>';
    // Extract all text from a given cell
echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
?>

</body>
</html>