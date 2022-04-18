<?php

require_once 'strategi.php';

class concesubtract implements strategy {
public function execute($a,$b){
	return $a*$b;}
}

?>