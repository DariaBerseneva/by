<?php

require_once 'strategi.php';

class conceadd implements strategy {
public function execute($a,$b){
	return ($a+$b);}
}

?>