<?php
class Pet{
	private $name;
	private $poroda;
	public function __construct($n,$p){
		$this->name=$n;
		$this->poroda=$p;
	}
	public function display(){
	echo sprintf('имя %s, порода %s.<br>',$this->name,$this->poroda);
	}
	public function voice(){
	echo sprintf('издает звуки<br>');
	}
}
?>