<?php
	header('Content-type: text/html; charset=utf8');
	$str1 = file_get_contents('dir1/dir2/test.txt');
	echo $str1;
?>