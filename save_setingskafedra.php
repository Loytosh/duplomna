<?php
session_start();

$admin_login="admin"; //Логін адміна
$admin_password="admin"; //Пароль адміна
 
if(isset($_POST['password'])):
$_SESSION[$_POST['login']]=$_POST['password'];
header("Location: {$_SERVER['PHP_SELF']}");
exit;
endif;
 
if($_SESSION[$admin_login]!=$admin_password)
{
?>
	<meta charset="utf-8">
	<form style="text-align: center; font-size: 17px;" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		Логін: <input type="text" name="login" style="width: 150px; margin-left: 18px; margin-bottom: 5px;"><br>
		Пароль: <input type="password" name="password" style="width: 150px; margin-bottom: 5px;"><br>
		<input type="submit" value="Підтвердити">
	</form>
<?php
exit;
}
else
{?>

	<?
		$id = $_POST['id'];
	   $newkafedra = $_POST['newkafedra'];
	   $oldkafedra = $_POST['oldkafedra'];
	?>

	<html> 
		<head>
			<title>Особова картка студента</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/style.css">
			<? include 'config.php'; ?>
		</head>

		<body>
			<?
			 //оновлення таблиці кафедра
				$sql = "UPDATE `kafedra` SET `kafedra`='$newkafedra' WHERE id='$id'";
				mysqli_query($link, $sql);

			 //змінення кафедр в базі даних студентів
			 $sql = "UPDATE `student` SET `kafedra`='$newkafedra' WHERE `kafedra`='$oldkafedra'";
				mysqli_query($link, $sql);

			 echo "<br> Базу успішно оновлено<br>";
			?>
		</body>
	<? include 'footer.php'; ?>
	</html>
	<?
	   echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">";
	?>
	
<?php
}
?>