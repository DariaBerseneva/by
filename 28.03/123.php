<?php
session_start();
if (!isset($_SESSION['reg'])){
header('Location: login.php');}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>главная</title>
</head>
<body>
<h1>Привет, <?php echo $_SESSION['name']." ".$_SESSION['surname'];?></h1>
<h1> Тебе <?php echo $_SESSION['age'];?> лет</h1>
<a href="logout.php">Выйти</a><br>
<a href="profile.php">Настройки</a>
</body>
</html>