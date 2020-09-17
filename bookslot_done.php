<?php
include('header.php');
include('connection.php');

$bookingstatus = 0;
$visitingcharge = 300;
if(isset($_POST['submit_otp']))
{
	$otp = $_POST['otp'];
	$bookingid = $_POST['bookingid'];
	
	
	$q0 = "select b.bookingreferenceid,b.otp,s.id, b.petname, b.petage,b.petbreed, b.customername, b.email, b.phone, b.address, pt.type, st.servicename, st.packageprice, st.servicedescription, s.slotdate, ts.slottimestart,ts.slottimeend from mypetspas_booking b join mypetspas_slots s on b.slotid = s.id join mypetspas_timeslots ts on s.timeslotid = ts.id join mypetspas_servicetype st on b.servicetypeid = st.id join mypetspas_pettype pt on b.pettypeid = pt.id where b.id = $bookingid";
    $r0 = mysql_query($q0);
    list($bookingreferenceid,$dbotp,$slotid, $petname, $petage,$petbreed, $customername, $email, $phone, $address, $type, $servicename, $packageprice, $servicedescription, $slotdate, $slottimestart,$slottimeend)=mysql_fetch_array($r0);

    //echo $q0;
	
	if($otp == $dbotp) {
	    
	    //success
	
	    $q1 = "select status from mypetspas_slots where id = $slotid";
        $r1 = mysql_query($q1);
        list($slotstatus)=mysql_fetch_array($r1);
	
	    $q2 = "update mypetspas_booking set bookingstatus = 1 where id = $bookingid";
        $r2 = mysql_query($q2);
	
	
	    if($slotstatus <= 1) {
	        $newslotstatus = $slotstatus + 1;
	        $q2 = "update mypetspas_slots set status = $newslotstatus where id = $slotid;";
            $r2 = mysql_query($q2);
            
            //echo "success";
	    
    	    $dayOfWeek = date("l", strtotime($slotdate));
            $x1 = date('h:i:s A', strtotime($slottimestart));
            $y1 = date('h:i:s A', strtotime($slottimeend));
    	    
    	    $admincontact = "8886367170";
    	    $api_key = '35F49E42B40E55';
            $contacts = $phone.",".$admincontact;
            $from = 'EASYMS';
            $sms = "Welcome to mypetspas.com, Your Grooming session has been booked with booking ref $bookingreferenceid on $slotdate ($dayOfWeek), $x1 - $y1 for Package $servicename. Customer Name : $customername and Phone Number : $phone ";
            $sms_text = urlencode($sms);
            
            $api_url = "https://login.easywaysms.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=7&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
            
            
            
            //Submit to server
            
            $response = file_get_contents( $api_url);
            //echo $response;
            $bookingstatus = 1;
	    }
	    else {
    	    //slot not available failed
    	    $bookingstatus = 2;
    	    
    	}
        
        
	}
	else {
	    // otp failed
	    $bookingstatus = 3;
	}
    
}


?>

<div class="hero-wrap" style="background-image: url('images/admin-bg.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="no-gutters slider-text  align-items-center justify-content-center" data-scrollax-parent="true">
    		<div class="row d-md-flex">
    			<div class="col-md-12 col-lg-12 half   pl-lg-5 ftco-animate" style= "margin-top:5%; margin-bottom:5%;">
    			    <div class="row">
    				    <div class="col-md-12">
    				        
    				        <?php 
    				        if($bookingstatus == 1) { 
    				            
    				            ?>
    				            
    				            <div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-check"></span>
				        		</div>
				        		<div class="text">
					                <p><span><?php echo "Congratulations Your Grooming slot has been booked <br/> Booking Reference :  $bookingreferenceid <br/>Slot Date :  $slotdate ($dayOfWeek), <br/>Slot Timings :   $x1 - $y1 <br/>Package :  $servicename <br/>Package Details :  $servicedescription <br/>Package Price :  $packageprice + Visiting Charges : 300 (INR) </br>Total Price : $packageprice + $visitingcharge (INR)"; ?></span></p>
					          </div>
				            </div>
    				            
    				            <?php
    				        }
    				        else {
    				            ?>
    				            
    				            <div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-times"></span>
				        		</div>
				        		<div class="text">
					                <p><span><?php echo "Your Grooming slot has not been booked <br/> Booking Reference :  $bookingreferenceid"; ?></span></p>
					          </div>
				            </div>
    				            
    				            <?php
    				        }
    				        
    				        ?>
    				        
						    
						</div>
						
						
    				</div>
    				
    				
    			</div>
    		</div>
    </div>
  </div>
</div>

		
    <?php
    include('footer.php')
     ?>
