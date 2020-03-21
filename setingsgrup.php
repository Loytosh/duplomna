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

	<html>
		<head>
			<title>Особова картка студента</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/style.css">
			<? include 'config.php'; ?>
		</head>


		<? include 'header.php'; ?>
		<body>
			<form method="LINK" action="index.php">
				<input type="submit" value="Головна" style="font-family: 'Roboto', sans-serif; font-size: 14px; width: 80px; margin-left: 60px; margin-top: 10px;">
			</form>

			<div id="searchs">
				<br><h3>Групи</h3><br>

				<div class="resultsearch">
					<!--Скріпт на видалення (ЯКИЙ Я НЕ МІГ ВИРІШИТИ ПІВ ДНЯ!!!!!)-->
					<?if (isset($_GET['del'])){
						$id = $_GET['del'];
						$sql = "DELETE FROM grup WHERE id=$id";

						mysqli_query($link, $sql);
					}?>


					<?
						$sql = "SELECT * FROM grup ORDER BY grup";
						$result = mysqli_query($link, $sql);

						while ($row = mysqli_fetch_array($result)) { 
					?>

			<form action="save_setingsgrup.php" method="POST">
				<div style="float: left; font-size: 16px;">
					Група : <br>
				</div>

				<div style="margin-left: 150px; font-size: 14px; width: 99%;">
					<input type="text" name="id" value="<?echo $row['id']?>" style="display: none;">
				<input type="text" name="oldgrup" value="<?echo $row['grup']?>" style="display: none;">
					<input type="text" style="width: 75%;" name="newgrup" value="<?echo $row['grup']?>"><br>

					<input type="submit" name="setings" value=" Зберегти " style="text-decoration: none; color: #0ac400;">
					<a href="?del=<?echo $row['id']?>" style="text-decoration: none; color: #e83c3c;"> Видалити </a><br>
				</div>
			</form>
						<hr style="margin-top: 3px;"><br>

						<?
						};
					?>

			<br><br>	
			<form action="addgrup.php" method="POST">
				<div style="font-size: 16px; margin-bottom: 100px;">
					Група : <input type="text" name="newgrup">
					<input type="submit" value="Додати">
			 </div>
			</form>


			</div>
			</div>
		</body>
		<? include 'footer.php'; ?>
	</html>
	
<?php
}
?>