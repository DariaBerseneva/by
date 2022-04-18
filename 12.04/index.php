<?php
require_once 'context.php'; 
require_once 'conceadd.php'; 
require_once 'concemultiply.php'; 
require_once 'concesubtract.php'; 


if (!empty($_POST)) {
	$context = new Context();
	$x = $_POST['first_num'];
	$y =  $_POST['last_num'];
	$act =  $_POST['deistvie'];
	switch ($act) {
		case '+': $context->setStrategy(new conceadd); break;
		case '-': $context->setStrategy(new concesubtract); break;
		case '*': $context->setStrategy(new concemultiply); break;
		default: die('Неверные действия!');
	}
	echo $x;
	echo $y;
	$result = $context->executeStrategy($x, $y);
	echo '<h1>'.$result.'</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="first_num" placeholder="первое число">
		<select name="deistvie">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
		</select>
	<input type="text" name="last_num" placeholder="второе число"><br>
	<input type="submit" value="посчитать">
</form>
</body>
</html>