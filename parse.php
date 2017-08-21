<?php
	$url = 'http://www.dictionary.com/browse/banausic';
	$page = file_get_contents($url);
	$page = mb_convert_encoding($page, 'utf-8', mb_detect_encoding($page));
	$page = mb_convert_encoding($page, 'html-entities', 'utf-8'); 
	$dom = new DOMDocument();
	libxml_use_internal_errors(true);
	$dom->loadHTML($page);
	libxml_use_internal_errors(false);
	$contentSection = $dom->getElementsByClassName('def-list');
	$pageContent = $dom->saveHTML($contentSection);
	echo $pageContent;	
?>