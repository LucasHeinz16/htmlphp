<?php
require('autoload.php');
 
$html = new Html();
$head = new Head();
$body = new Body();
$html->addHead($head);
echo $html;

$title = new Title('Hello, world!');
$head->addTitle($title);
echo $head;

$h1 = new H1('Hello, world!');
$body->addH1($h1);
echo $body;

?>

