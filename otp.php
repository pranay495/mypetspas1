<?php
include('connection.php');
include('header.php');

   $error=''; // Variable To Store Error Message
   if (isset($_POST['submit']))
   {
     if (empty($_POST['name']) || empty($_POST['phone_no']))
     {
       $error = "Enter Name and Phone Number";
     }
     else
     {

       $name=$_POST['name'];
       $phoneno=$_POST['phone_no'];

       echo $phoneno;

       $randotp1 = rand(1000,9999);
       echo $randotp1;

     }
   }
?>
 <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
     <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="row d-md-flex justify-content-end">
          <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
            <h2 class="mb-4">Mobile Login</h2>
            <form action="" class="appointment" novalidate>
              <div class="row">


                <div class="col-md-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="otp_no" placeholder="Enter OTP">
                  </div>
                </div>
                <?php
                echo $randotp1;
                echo $phoneno;
                 ?>


                <div class="col-md-12">
                  <div class="form-group">
                    <input type="submit" value="submit" id="submit" class="btn btn-primary py-3 px-4">
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
  $error=''; // Variable To Store Error Message
  if (isset($_POST['submit']))
  {
    if (empty($_POST['otp_no']))
    {
      $error = "Enter OTP";
    }
    else {
      $opt_no = $_POST['otp_no'];

      if ($otp_no == $randotp)
 			{
 				// $_SESSION['login_user']=$name; // Initializing Session
 				header("location: booknow.php"); // Redirecting To Other Page
 			}
 			else
 			{
 				$error = "Username or Password is invalid";
        echo "OTP Error";
 			}
 			mysql_close($connection);
    }

  }

 ?>

 <?php
include('footer.php');
  ?>
