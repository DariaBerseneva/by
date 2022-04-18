<?php
	// header('Content-type: text/html; charset=utf8');
	// $str1 = file_get_contents('1.txt');
	// $str2 = file_get_contents('2.txt');
	// $sum1=0;
	// $sum2=0;
	// $arr1 = explode(' ', $str1);
	// $arr2 = explode(' ', $str2);
	// for ($i=0; $i <count($arr1) ; $i++) { 
	// 	$sum1+=$arr1[$i];
	// }
	// for ($i=0; $i <count($arr2) ; $i++) { 
	// 	$sum2+=$arr2[$i];
	// }
	// echo $sum1 . "+"  , $sum2 . "=" , $sum1+$sum2;
// header('Content-type: text/html; charset=utf8');
// $str1 = file_get_contents('1.txt');
// $str2 = file_get_contents('2.txt');
// $arr1 = explode(' ', $str1);
// $arr2 = explode(' ', $str2);
// $sum = array_sum($arr1) + array_sum($arr1);
// file_put_contents('sum.txt',$sum);
// header('Content-type: text/html; charset=utf8');
// $chislo = file_get_contents('1.txt');
// file_put_contents('1.txt', $chislo+1);
header('Content-type: text/html; charset=utf8');
 $str1 = file_get_contents('1.txt');
 $str2 = file_get_contents('2.txt');
 $str3 = file_get_contents('sum.txt');
$arr1 = explode(' ', $str1);
$arr2 = explode(' ', $str2);
file_put_contents('new.txt',$str1 . "  "  . $str2 . "  " . $str3);
?>