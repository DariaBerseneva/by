<?php 
require_once 'duck.php';
require_once 'flynoway.php';
require_once 'squeak.php';

class rubberduck extends Duck {
	public function __construct(){
		$this->flybehavior = new flynoway();
		$this->quackbehavior = new squeak();}
	
	public function display(){
		echo 'Я резиновая утка!<br>';}
}
?>