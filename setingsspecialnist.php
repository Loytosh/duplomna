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
			<br><h3>Спеціальності</h3><br>

			<div class="resultsearch">
				<!--Скріпт на видалення (ЯКИЙ Я НЕ МІГ ВИРІШИТИ ПІВ ДНЯ!!!!!)-->
				<?if (isset($_GET['del'])){
					$id = $_GET['del'];
					$sql = "DELETE FROM specialnist WHERE id=$id";
					
					mysqli_query($link, $sql);
				}?>
				
			
				<?
					$sql = "SELECT * FROM specialnist";
					$result = mysqli_query($link, $sql);
					
					while ($row = mysqli_fetch_array($result)) { 
				?>
					
		<form action="save_setingsspecialnist.php" method="POST">
			<div style="float: left; font-size: 16px;">
				Спеціальність : <br>
			</div>
					
			<div style="margin-left: 150px; font-size: 14px; width: 99%;">
				<input type="text" name="id" value="<?echo $row['id']?>" style="display: none;">
            <input type="text" name="oldspecialnist" value="<?echo $row['specialnist']?>" style="display: none;">
				<input type="text" style="width: 75%;" name="newspecialnist" value="<?echo $row['specialnist']?>"><br>
				
				<input type="submit" name="setings" value=" Зберегти " style="text-decoration: none; color: #0ac400;">
				<a href="?del=<?echo $row['id']?>" style="text-decoration: none; color: #e83c3c;"> Видалити </a><br>
			</div>
		</form>
					<hr style="margin-top: 3px;"><br>
					
					<?
					};
				?>

		<br><br>	
		<form action="addspecialnist.php" method="POST">
			<div style="font-size: 16px;">
				Спеціальність : <input type="text" name="newspecialnist">
				<input type="submit" value="Додати">
         </div>
		</form>

			
		</div>
		</div>
	</body>
	<? include 'footer.php'; ?>
</html>