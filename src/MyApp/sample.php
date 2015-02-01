<?php
namespace Sunra\PhpSimple;

include('C:/wamp/www/whiteboard/vendor/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/HtmlDomParser.php');

$html = HtmlDomParser::file_get_html($_GET['query']);

// Find all images 
// foreach($html->find('title') as $element) 
//        echo $element->src . '<br>';
echo $html->find('title',0)->innertext;
// // Find all links 
// foreach($html->find('a') as $element) 
//        echo $element->href . '<br>';

?>