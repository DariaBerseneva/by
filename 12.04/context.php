<?php

require_once 'strategi.php';

class context {
	private $strategy;
public function setStrategy ($strategy){
 	$this->strategy=$strategy;
}
public function executeStrategy($a,$b){
	return $this->strategy->execute($a,$b);
}
}

?>