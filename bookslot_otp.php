<?php
include('header.php');
include('connection.php');

function generate_otp($strength = 6) {
    $input = '0123456789';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

if(isset($_POST['submit_bookslot']))
{
	$pettypeid = $_POST['pettype'];
	$customername = $_POST['customername'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$petname = $_POST['petname'];
	$petage = $_POST['petage'];
	$breedname = $_POST['breedname'];
	$servicetype = $_POST['servicetype'];
	$availableslot = $_POST['availableslot'];
	
	$uniqueOtp = generate_otp(6);
	$currentdate = date('Y-m-d h:i:s');
	
	$admincontact = "9677410159";
	$api_key = '35F49E42B40E55';
    $contacts = $phone;
    // echo $contacts;
    $from = 'EASYMS';
    $sms = "Welcome to mypetspas.com, Otp to book grooming slot is $uniqueOtp.";
    $sms_text = urlencode($sms);
    
    $api_url = "https://login.easywaysms.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=7&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
    
    //Submit to server
    
    $response = file_get_contents( $api_url);
    //echo $response;
    
    $q0 = "select max(id) from mypetspas_booking";
    $r0 = mysql_query($q0);
    list($maxid)=mysql_fetch_array($r0);
    $bookingid = $maxid + 1;
    
    $length = 5;
    $formatnum = substr(str_repeat(0, $length).$bookingid, - $length);
    $bookingref = "MPS".$formatnum;
        		
    $q1 = "insert into mypetspas_booking (id,bookingreferenceid, pettypeid, servicetypeid, petname, petage, petbreed, customername, email, phone, address, slotid, bookingstatus, otp, modifiedon) Values ($bookingid,'$bookingref', $pettypeid, $servicetype, '$petname', $petage, '$breedname', '$customername', '$email', '$phone', '$address', $availableslot, 0, '$uniqueOtp', '$currentdate')";
	$r1 = mysql_query($q1);
	
	//echo $q1;
}


?>

<div class="hero-wrap" style="background-image: url('images/admin-bg.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="no-gutters slider-text  align-items-center" data-scrollax-parent="true">
    		<div class="row d-md-flex ">
    			<div class="col-md-12 col-lg-6 half pl-lg-5 ftco-animate" style= "margin-top:5%; margin-bottom:5%;">
    				<h2 class="mb-4">Enter OTP</h2>
    				<form method="post" action="bookslot_done.php" class="appointment">
    					<div class="row">
    					    <div class="col-md-12">
									<div class="form-group">
			                            <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP sent to your Mobile Number">
			                            <input type="hidden" class="form-control" id="bookingid" name="bookingid" value="<?php echo $bookingid; ?>" >
			                        </div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Submit OTP" id="submit_otp" name="submit_otp" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	                </form>
    			</div>
    		</div>
    </div>
  </div>
</div>

		
    <?php
    include('footer.php')
     ?>
