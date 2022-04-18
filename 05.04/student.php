<?php
require_once 'human.php';
require_once 'group.php';
class student extends human{
private $group;



public function __construct($n,$p,$s,$g){
	parent::__construct($n,$p,$s);
	$this->group = $g;
	$this->group->addstudent($this);	
}

public function display(){
	parent:: display();
	echo sprintf('%s<br>',$this->group->gettitle());}
}
?>