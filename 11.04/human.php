<?php
abstract class human{
	private $name;
	private $surname;
	private $pat;

	public function __construct($n,$p,$s){
		$this->name=$n;
		$this->surname=$p;
		$this->pat=$s;
	}
	public function display(){
	echo sprintf('%s %s %s  ',$this->name,$this->surname,$this->pat);
	}
}
?>