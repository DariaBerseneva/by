<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'student.php';
	require_once 'group.php';

function loadstudents($group,$path){
	$file=nl2br(file_get_contents($path));
	$students = explode('<br />',$file);
	foreach ($students as $s){
		$tmp= explode(';',$s);
		$surname = $tmp[0];
		$name = $tmp[1];
		$patr = $tmp[2];
		new Student($name,$surname,$part,$group);}}

	$group1 = new group (1,' i-01');
	$group2 = new group (2,' i-02');
	$group3 = new group (3,' i-03');
	
	loadstudents($group1,'i01.txt');
	$group1->show();
	loadstudents($group2,'i02.txt');
	$group2->show();
?>