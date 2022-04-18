<?php
class discipline{
	private $id;
	private $title;

	public function __construct($i,$t){
		$this->id=$i;
		$this->title=$t;
	}
	public function gettitle(){
		return $this->title;
	}
}
?>