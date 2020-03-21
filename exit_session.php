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

exit;
}
else {
	echo "<meta charset='utf-8'> <h3 align='center'>Вихід з адмінки</h3>";
}

	session_destroy();

	echo "<meta http-equiv=\"refresh\" content=\"0.5;url=" . $_SERVER['HTTP_REFERER'] . "\">";
?>