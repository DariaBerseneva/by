<?php
require_once 'discipline.php';
class group{
	private $id;
	private $title;
	private $students= array();
	private $disciplines= array();

	public function __construct($i,$t){
		$this->id=$i;
		$this->title=$t;
	}
	public function gettitle(){
		return $this->title;
	}
	public function addstudent($s){
		array_push($this->students, $s);
	}
	public function show (){
		echo '<h1>Группа'.$this->title.'</h1>';
		echo '<h2>список студентов</h2>';
		foreach ($this->students as $student){
			$student->display();
		}
		echo '<h1>дисциплина'.$this->title.'</h1>';
		echo '<h2>список дисциплин</h2>';
		foreach ($this->disciplines as $discipline){
			$discipline->display();
		}
	}
	public function adddiscipline($d){
		array_push($this->disciplines, $d);
	}

}
?>
