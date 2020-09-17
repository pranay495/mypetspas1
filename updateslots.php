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
    <div class="row no-gutters slider-text  align-items-center" data-scrollax-parent="true">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-12 pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Update Slots</h2>
    				<form method="post" action="updateslotsprocess.php" class="appointment">
    				    
    				    <div class="row">
    				        <div class="col-md-12">
    				            <div class="form-group">
    				                <label  style="color:black;">Select Slot Date</label> 
        			              <input class="form-control" type="date" id="slotdate" name="slotdate" required>
        			            </div>
    				        </div>
    				    </div>
    				    
    				    <?php 
    				    
    				        $r1 = mysql_query("select distinct id,slotname,slottimestart,slottimeend from mypetspas_timeslots");
						    while(list($slotid,$slotname,$slottimestart,$slottimeend) = mysql_fetch_array($r1))
						    {
						     
						?>
						
						<div class="row">
    				        <div class="col-md-12">
    				            <div class="form-group">
    				              <label style="color:black;"><input type="checkbox" id="timeslotsarray[]" name="timeslotsarray[]" value="<?php echo $slotid?>"> <?php $x = date('h:i:s A', strtotime($slottimestart)); $y = date('h:i:s A', strtotime($slottimeend)); echo "$slotname : $x - $y"?></label>
        			            </div>
    				        </div>
    				        
    				    </div>
						
						     
						<?php
						        
						    }
    				    
    				    ?>
    				    
    					<div class="row">
    						<div class="col-md-12">
							    <div class="form-group">
			                        <input type="submit" id="submit_updateslots" name="submit_updateslots" value="Update" class="btn btn-primary py-3 px-4">
			                    </div>
							</div>
    					</div>
	          </form>
    			</div>
    		</div>
    </div>
    
    <div class="no-gutters slider-text  align-items-center" data-scrollax-parent="true">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-12 pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Upcoming Slots</h2>
    				
    				<table id="example" class="table table-striped table-bordered" style=" background-color:white; width:100%">
        <thead>
            <tr>
                <th>SNo.</th>
                <th>Slot Date</th>
                <th>Slot Start Time</th>
                <th>Slot End Time</th>
                <th>Booking 1</th>
                <th>Booking 2</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
            $i=1;
            $currentdate = date('Y-m-d');
            $q1 = "select s.id,s.slotdate,ts.slottimestart, ts.slottimeend from mypetspas_slots s join mypetspas_timeslots ts on ts.id = s.timeslotid where s.isactive = 1 and s.slotdate >= '$currentdate' order by s.slotdate asc";
        	$r1 = mysql_query($q1);
        	//echo $q1;
        	while(list($slotid, $slotdate,$slottimestart,$slottimeend)=mysql_fetch_array($r1)) {
        	    ?>
        	    
        	    <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo "$slotdate";?></td>
                    <td><?php $x1 = date('h:i:s A', strtotime($slottimestart)); echo "$x1"?></td>
                    <td><?php $y1 = date('h:i:s A', strtotime($slottimeend)); echo "$y1"?></td>
                    <td></td>
                    <td></td>
                    <td><a href="deleteslot.php?slotid=<?php echo $slotid;?>">Delete Slot</a></td>
                </tr>
        	    
        	    <?php
        	    $i = $i+1;
        	}
            ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>SNo.</th>
                <th>Slot Date</th>
                <th>Slot Start Time</th>
                <th>Slot End Time</th>
                <th>Booking 1</th>
                <th>Booking 2</th>
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
