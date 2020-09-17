<?php 
	include("connection.php");
	include("login_process.php");
	include('header.php');
	
?>

<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="no-gutters slider-text  align-items-center " data-scrollax-parent="true">
    		<div class="row d-md-flex">
    			<div class="col-md-12 col-lg-6 half   pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Login</h2>
    				<form method="post" action="" class="form-signin">
    					<div class="row">
    						
								<div class="col-md-12">
									<div class="form-group">
			              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			            </div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Login" id="login_submit" name="login_submit" class="btn btn-primary py-3 px-4">
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
