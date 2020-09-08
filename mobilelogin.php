<?php
include('connection.php');
include('header.php');
 ?>

 <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
     <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="row d-md-flex justify-content-end">
          <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
            <h2 class="mb-4">Mobile Login</h2>
            <form action="otp.php" class="appointment" novalidate>
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="phone_no" placeholder="Phone Number">
                  </div>
                </div>

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
include('footer.php');
  ?>
