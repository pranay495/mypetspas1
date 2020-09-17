<?php
include('session.php');
include('connection.php');

	if (isset($_POST['submit_updateslots']) && isset($_POST['slotdate'])) 
	{
		$slotdate = $_POST['slotdate'];
		
		if(!empty($_POST['timeslotsarray'])){
            foreach($_POST['timeslotsarray'] as $selectedslot){
                    
                $q1 = "select id from mypetspas_slots where slotdate='$slotdate' and timeslotid = '$selectedslot'";
        		$r1 = mysql_query($q1);
        		$rc = mysql_num_rows($r1);
        		
        		echo "Count: $rc <br/>";
            	
            	
            	if($rc > 0) 
            	{
            	    list($slotid)=mysql_fetch_array($r1);
        			$q2 = "update mypetspas_slots set isactive = 1 where id ='$slotid'";
        		    mysql_query($q2);
            	}
            	else 
            	{
            	    $q3 = "insert into mypetspas_slots (slotdate, timeslotid, status, isactive) Values ('$slotdate', $selectedslot, 0,1)";
            	    mysql_query($q3);
            	}
                    
            }
        }
		
	}
	
	header("location: updateslots.php");
?>