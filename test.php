<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'simple_html_dom.php';
$url = 'https://www.merriam-webster.com/dictionary/dictionary';
	$page = file_get_contents($url);
	$page = mb_convert_encoding($page, 'utf-8', mb_detect_encoding($page));
	$page = mb_convert_encoding($page, 'html-entities', 'utf-8'); 
	$dom = new DOMDocument();
	libxml_use_internal_errors(true);
	$dom->loadHTML($page);
	libxml_use_internal_errors(false);
	$contentSection = $dom->getElementById('card-primary-content');
	$pageContent = $dom->saveHTML($contentSection);
	echo $pageContent;	




?>


