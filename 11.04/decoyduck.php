<?php 
require_once 'duck.php';
require_once 'flynoway.php';
require_once 'muteqack.php';

class decoyduck extends Duck {
	public function __construct(){
		$this->flybehavior = new flynoway();
		$this->quackbehavior = new muteqack();}
	
	public function display(){
		echo 'Я деревянная утка!<br>';}
}
?>