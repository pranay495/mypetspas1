<?php 
 
include('session.php');
include('connection.php');


if(isset($_GET['slotid']))
{
	$slotid = $_GET['slotid'];
	
	$q1 = "update mypetspas_slots set isactive = 0 where slotid = '$slotid'";
	
	$r1 = mysql_query($q1) or die('Error, query failed');
	
	header("location:updateslots.php");
}


 ?>