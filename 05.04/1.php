<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'cat.php';
	require_once 'dog.php';

	$pet1=new Cat('Василий','сфинкс');
	$pet1->display();
	$pet1->voice();
	$pet2=new Dog('Богдан', 'Богом дан');
	$pet2->display();
	$pet2->voice();
?>