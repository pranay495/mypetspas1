<?php
session_start();
include ('connection.php');

$user_check=$_SESSION['login_user'];
$query = mysql_query("select * from mypetspas_credentials where  username='$user_check'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 0) {

	mysql_close($connection); 
	header('Location: login.php'); 
}

?>