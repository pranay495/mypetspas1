<?php
include("connection.php");
	include("session.php");
	include('admin_header.php');
?>

<link href="../sgedu.in/sgcc/softwares/student/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />   
<link href="../sgedu.in/sgcc/softwares/student/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

<div class="hero-wrap" style="background-image: url('images/admin-bg.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="no-gutters slider-text  align-items-center" data-scrollax-parent="true">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-12 pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Upcoming Bookings</h2>
    				
    				<table id="example" class="table table-striped table-bordered" style=" background-color:white; width:100%; font-size:10px; line-height:1; color: black;">
        <thead>
            <tr>
                <th>SNo.</th>
                <th>Booking Ref</th>
                <th>Customer Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Pet Type</th>
                <th>Name</th>
                <th>age</th>
                <th>Breed</th>
                <th>Service</th>
                <th>Date</th>
                <th>Timings</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
            $i=1;
            $currentdate = date('Y-m-d');
            $status = "";
            $q1 = "select b.id, b.bookingreferenceid,s.id, b.petname, b.petage,b.petbreed, b.customername, b.email, b.phone, b.address, b.bookingstatus, pt.type, st.servicename, st.packageprice, st.servicedescription, s.slotdate, ts.slottimestart,ts.slottimeend from mypetspas_booking b join mypetspas_slots s on b.slotid = s.id join mypetspas_timeslots ts on s.timeslotid = ts.id join mypetspas_servicetype st on b.servicetypeid = st.id join mypetspas_pettype pt on b.pettypeid = pt.id where s.isactive = 1 and s.slotdate >= '$currentdate' order by s.slotdate asc";
        	$r1 = mysql_query($q1);
        	//echo $q1;
        	while(list($bookingid, $bookingreferenceid,$slotid, $petname, $petage,$petbreed, $customername, $email, $phone, $address, $bookingstatus, $type, $servicename, $packageprice, $servicedescription, $slotdate, $slottimestart,$slottimeend)=mysql_fetch_array($r1)) {
        	    if($bookingstatus == 1){
        	        $status = "Booked";
        	    }
        	    else{
        	        $status = "Not Booked";
        	    }
        	    ?>
        	    
        	    <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $bookingreferenceid;?></td>
                    <td><?php echo $customername;?></td>
                    <td><?php echo $phone;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $type;?></td>
                    <td><?php echo $petname;?></td>
                    <td><?php echo $petage;?></td>
                    <td><?php echo $petbreed;?></td>
                    <td><?php echo $servicename;?></td>
                    <td><?php echo "$slotdate";?></td>
                    <td><?php $x1 = date('h:i:s A', strtotime($slottimestart));$y1 = date('h:i:s A', strtotime($slottimeend)); echo "$x1 - $y1;"?></td>
                    <td><?php echo $status;?></td>
                    <!--<td><a href="cancelbooking.php?bookingid=<?php echo $bookingid;?>">Cancel</a>-->
                    <td>
                    <?php 
                        if($bookingstatus == 1){
                            echo "<a href='cancelbooking.php?bookingid=$bookingid'>Cancel</a>";
                        }
                    ?>
                    </td>
                </tr>
        	    
        	    <?php
        	    $i = $i+1;
        	}
            ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>SNo.</th>
                <th>Customer Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Pet Type</th>
                <th>Name</th>
                <th>age</th>
                <th>Breed</th>
                <th>Service</th>
                <th>Date</th>
                <th>Timings</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    				
    			</div>
    		</div>
    </div>
  </div>
</div>

<script src="../sgedu.in/sgcc/softwares/student/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../sgedu.in/sgcc/softwares/student/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script>

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

    <?php
    include('footer.php')
     ?>