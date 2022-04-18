<?php
require_once 'human.php';
require_once 'iProgramer.php';

class Programer extends human implements iProgramer {
private $langs = array();
public function addLang($l){
	array_push($this->langs,$l);
}
public function getLangs(){
	return $this->langs;
}
public function display(){
	parent::display();
	echo '<h2>Список языков</h2>';
	foreach ($this->langs as $langs) {
		echo $langs.'<br>';
	}}
}
?>