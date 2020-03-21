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
		
		<div id="searchs">
			
			<br><h3 style="margin-left: 20%;">Пошук</h3><br>
			
			<form name="bio" action="bio.php" method="POST" >
			<div style="float: left; font-size: 16px; text-align: left; margin-left: 20%;">
				ID ФО : <br>
				Прізвище : <br>
				Ім'я : <br>
				По батькові : <br>
				Факультет : <br>
				Кафедра : <br>
				Спеціальність : <br>
				Група : <br>
			</div>
			
			<div style="margin-left: -100px; font-size: 14px; width: 99%;">
				<input type="text" style="width: 40%;" name="id_fo"><br>
				<input type="text" style="width: 40%;" name="lastname"><br>
				<input type="text" style="width: 40%;" name="name"><br>
				<input type="text" style="width: 40%;" name="by_father"><br>
				<select name="fakultet" style="width: 40%;">
					<option selected></option>
						<? $sql2 = "SELECT * FROM fakultet";
							$result2 = mysqli_query($link, $sql2); 
							while ($row2 = mysqli_fetch_array($result2)) {
								print("<option>".$row2['fakultet']."</option>"); } ?>
				</select><br>

				<select name="kafedra" style="width: 40%;"> 
					<option selected></option>
						<? $sql3 = "SELECT * FROM kafedra";
							$result3 = mysqli_query($link, $sql3); 
							while ($row3 = mysqli_fetch_array($result3)) {
								print("<option>".$row3['kafedra']."</option>"); } ?>
				</select><br>

				<select name="specialnist" style="width: 40%;"> 
					<option selected></option>
						<? $sql4 = "SELECT * FROM specialnist";
							$result4 = mysqli_query($link, $sql4); 
							while ($row4 = mysqli_fetch_array($result4)) {
								print("<option>".$row4['specialnist']."</option>"); } ?>
				</select><br>

				<select name="grup" style="width: 40%;"> 
					<option selected></option>
						<? $sql5 = "SELECT * FROM grup";
							$result5 = mysqli_query($link, $sql5); 
							while ($row5 = mysqli_fetch_array($result5)) {
								print("<option>".$row5['grup']."</option>"); } ?>
				</select><br>
			</div>

				
				<input type="submit" value="Підтвердити" style="margin: 8px; margin-left: 20%;font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form>
			
		</div>
		
		<div id="add">
		
			<br><h3>Редагувати</h3><br><br>
			
			<form method="LINK" action="addstudent.php"> <!--Додати студента-->
				<input type="submit" value="Додати студента" style="font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form><br>
			
			<form method="LINK" action="setings.php"> <!--Спільна база даних-->
				<input type="submit" value="База даних" style="font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form><br>
			
			<form method="LINK" action="setingsfakultet.php"> <!--База факультетів-->
				<input type="submit" value="Факультет" style="font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form><br>

			<form method="LINK" action="setingskafedra.php"> <!--База кафедр-->
				<input type="submit" value="Кафедра" style="font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form><br>

			<form method="LINK" action="setingsspecialnist.php"> <!--База спеціальностей-->
				<input type="submit" value="Спеціальність" style="font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form><br>

			<form method="LINK" action="setingsgrup.php"> <!--База груп-->
				<input type="submit" value="Група" style="font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form><br>
			
		</div>
		
		<div class="footer">
			© Yanek Loytosh
			
			<form class="form_exit" action="exit_session.php">
				<button class="exit">Вийти</button>
			</form>
		</div>
		</body>
	</html>
   
<?php
}
?>