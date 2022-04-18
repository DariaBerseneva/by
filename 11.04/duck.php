<?php

abstract class Duck {
 	protected $flybehavior;
	protected $quackBehavior;

	 public function swim(){
 		echo 'Я плыву!<br>';
 	}

 	abstract public function display ();

 	public function performfly() {
 		$this->flybehavior->fly();
 	}
 	public function performquak() {
 		$this->quackbehavior->qack();
 	}
}

?>