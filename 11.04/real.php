<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'Programer.php';

$p1= new Programer('иван','иванов','иванович');
$p1->addLang('C++');
$p1->addLang('pascal');
$p1->addLang('PHP');
$p1->display();
?>