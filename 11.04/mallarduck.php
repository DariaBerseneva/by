<?php 
require_once 'duck.php';
require_once 'flywidhwings.php';
require_once 'quack.php';

class mallarduck extends Duck {
	public function __construct(){
		$this->flybehavior = new flywidhwings();
		$this->quackbehavior = new quack();}
	
	public function display(){
		echo 'Я обычная утка!<br>';}
}
?>
