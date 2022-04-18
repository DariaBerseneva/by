<?php 
header('Content-Type: text/html; charset=utf-8');
require_once 'mallarduck.php';
require_once 'redheadduck.php';
require_once 'rubberduck.php';
require_once 'decoyduck.php';

$duck1 = new decoyduck();
$duck1->display();
$duck1->performfly();
$duck1->performquak();
$duck1->swim();
echo '<hr><br>';

?>