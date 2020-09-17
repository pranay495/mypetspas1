<?php 
 
include('session.php');
include('connection.php');


if(isset($_GET['bookingid']))
{
	$bookingid = $_GET['bookingid'];
	

	
	$q1 = "update mypetspas_booking set bookingstatus = '0' where id = '$bookingid'";
	$r1 = mysql_query($q1) or die('Error, query failed');
	 
	$q2 = "select slotid  from mypetspas_booking where id = '$bookingid'";
	$r2 = mysql_query($q2) or die('Error, query failed');
	list($slotid) = mysql_fetch_array($r2);
	
	$q3 = "select status from mypetspas_slots where id = $slotid";
    $r3 = mysql_query($q3);
    list($slotstatus)=mysql_fetch_array($r3);
    
    
	$newslotstatus = $slotstatus - 1;
	$q4 = "update mypetspas_slots set status = $newslotstatus where id = $slotid;";
    $r4 = mysql_query($q4);
	
    
	
	header("location:viewbookings.php");
}


 ?>