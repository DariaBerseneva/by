<?php

require_once 'strategi.php';

class concemultiply implements strategy {
public function execute($a,$b){
	return $a-$b;}
}

?>