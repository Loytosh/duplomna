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
		$id_fo = $_POST['id_fo'];
		$lastname = $_POST['lastname'];
		$name = $_POST['name'];
		$by_father = $_POST['by_father'];
		$birthday = $_POST['birthday'];
		$fakultet = $_POST['fakultet'];
		$kafedra = $_POST['kafedra'];
		$specialnist = $_POST['specialnist'];
		$grup = $_POST['grup'];
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
				$sql = "INSERT INTO `student` (id_fo, lastname, name, by_father, birthday, fakultet, kafedra, specialnist, grup) values ('$id_fo', '$lastname', '$name', '$by_father', '$birthday', '$fakultet', '$kafedra', '$specialnist', '$grup')";

				mysqli_query($link, $sql);
				echo "<br> Базу успішно оновлено <br>";

				//(UPDATE student SET name = '%$name%', lastname = '%$lastname%' WHERE id = '%$id%')
			?>
		</body>
		<!--<meta http-equiv="refresh" content="0.5;URL=../setings.php" /> html звичайний редірект-->
	</html>

	<?
		 echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">";
	?>
	<!--echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">"; //PHP редірект на попередню сторінку
	
<?php
}
?>