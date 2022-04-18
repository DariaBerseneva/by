<?php
	require_once 'user.php';
	session_start();
	if (!isset($_SESSION['reg'])){
	header('Location: login.php');
	}

$user = new User;
	if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age'])) {
	$user->load_from_form();
	$user->save_to_session();
	}
	else {
		$user ->load_from_session();}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Профиль</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="content">
	<form action="" method="post">
		<h3> Настройки</h3>
		<span> Name:</span> 
		<input type="text" name="name"value="<?php echo $user->get_name();?>";><br>
		<span>Surnae: </span>
		<input type="text" name="surname"value="<?php echo $user->get_surname();?>";><br>
		<span> Age: </span>
		<input type="text" name="age"value="<?php echo $user->get_age();?>";><br>
		<input type="submit">
	</form> 
<a href="123.php">назад</a><br>
</div>
</body>
</html>