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
	<!--		<a href="#save3">перехід на перший елемент</a> <!--тест перехід по елементу -->
			<div id="searchs">
				<br><h3>База даних</h3><br>

				<div class="resultsearch">
					<!--Скріпт на видалення (ЯКИЙ Я НЕ МІГ ВИРІШИТИ ПІВ ДНЯ!!!!!)-->
					<?if (isset($_GET['del'])){
						$id = $_GET['del'];
						$sql = "DELETE FROM student WHERE id=$id";

						mysqli_query($link, $sql);
					}?>


					<?
						$sql = "SELECT * FROM student";
						$result = mysqli_query($link, $sql);

						$i = 1;
						while ($row = mysqli_fetch_array($result)) { $i++;
					?>

			<form action="save_setings.php" method="POST">
				<div style="float: left; font-size: 16px;">
					ID ФО : <br>
					Прізвище : <br>
					Ім'я : <br>
					По батькові : <br>
					День народження : <br>
					Факультет : <br>
					Кафедра : <br>
					Спеціальність : <br>
					Група : <br>
					Предмети : <sub>(beta)</sub><br>
				</div>

				<div style="margin-left: 150px; font-size: 14px; width: 99%; position: relative;">
					<input id="id<?echo$row['id']?>" type="text" name="id" value="<?echo $row['id']?>" style="margin-top: -20px; display: absolute; opacity: 0; width: 100px;" readonly><br>
					<input type="text" style="width: 75%;" name="id_fo" value="<?echo $row['id_fo']?>"><br>
					<input type="text" style="width: 75%;" name="lastname" value="<?echo $row['lastname']?>"><br>
					<input type="text" style="width: 75%;" name="name" value="<?echo $row['name']?>"><br>
					<input type="text" style="width: 75%;" name="by_father" value="<?echo $row['by_father']?>"><br>
					<input type="text" style="width: 75%;" name="birthday" value="<?echo $row['birthday']?>"><br>
					<select name="fakultet" style="width: 75%;"> <!--Значення беруться з другої таблиці, але записуються в основну-->
						<option selected><?echo $row['fakultet']?></option>
							<? $sql2 = "SELECT * FROM fakultet";
								$result2 = mysqli_query($link, $sql2); 
								while ($row2 = mysqli_fetch_array($result2)) {
									print("<option>".$row2['fakultet']."</option>"); } ?>
					</select><br>

					<select name="kafedra" style="width: 75%;"> 
						<option selected><?echo $row['kafedra']?></option>
							<? $sql3 = "SELECT * FROM kafedra";
								$result3 = mysqli_query($link, $sql3); 
								while ($row3 = mysqli_fetch_array($result3)) {
									print("<option>".$row3['kafedra']."</option>"); } ?>
					</select><br>

					<select name="specialnist" style="width: 75%;"> 
						<option selected><?echo $row['specialnist']?></option>
							<? $sql4 = "SELECT * FROM specialnist";
								$result4 = mysqli_query($link, $sql4); 
								while ($row4 = mysqli_fetch_array($result4)) {
									print("<option>".$row4['specialnist']."</option>"); } ?>
					</select><br>

					<select name="grup" style="width: 75%;"> 
						<option selected><?echo $row['grup']?></option>
							<? $sql5 = "SELECT * FROM grup ORDER BY grup";
								$result5 = mysqli_query($link, $sql5); 
								while ($row5 = mysqli_fetch_array($result5)) {
									print("<option>".$row5['grup']."</option>"); } ?>
					</select><br>
	<!--				<input type="text" style="width: 75%;" name="predmeti" value="<?//echo $row['predmeti']?>">-->
					<textarea style="width: 75%; height: 300px;" name="predmeti"><?echo $row['predmeti']?></textarea>

					<input type="submit" name="save" value=" Зберегти " style="text-decoration: none; color: #0ac400;">
					<a href="?del=<?echo $row['id']?>" style="text-decoration: none; color: #e83c3c;"> Видалити </a><br>
				</div>
			</form>
						<hr style="margin-top: 3px;"><br>

						<?
						};
					?>
				</div>






			</div>
		</body>
		<? include 'footer.php'; ?>
	</html>


<?php
}
?>