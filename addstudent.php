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
			
			<br><h3 style="margin-left: 20%;">Додати студента</h3><br>
			
			<form name="bio" action="save_addstudent.php" method="POST" >
			<div style="float: left; font-size: 16px; text-align: left; margin-left: 30%;">
				ID ФО : <br>
				Прізвище : <br>
				Ім'я : <br>
				По батькові : <br>
				Дата народження: <br>
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
				<input type="date" style="width: 40%;" name="birthday"><br>
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

				
				<input type="submit" value="Додати" style="margin: 8px; margin-left: 20%;font-family: 'Roboto', sans-serif; font-size: 16px; width: 150px;">
			</form>
		</div>
	</body>
	<? include 'footer.php'; ?>
</html>