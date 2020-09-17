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
     				<h2 class="mb-4">Book Consultation</h2>
     				<form action="#" class="appointment">
     					<div class="row">
     						<div class="col-md-12">
 									<div class="form-group">
 			    					<div class="form-field">
 	          					<div class="select-wrap">
 	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
 	                      <select name="" id="pet_type" class="form-control">
 	                      	<option value="animal">Select Animal</option>
 	                        <option value="cat">Cat</option>
 	                        <option value="dog">Dog</option>

 	                      </select>
 	                    </div>
 			              </div>
 			    				</div>
 								</div>
 								<div class="col-md-6">
 									<div class="form-group">
 			              <input type="text" class="form-control" id="name" placeholder="Your Name">
 			            </div>
 								</div>
 								<div class="col-md-6">
 									<div class="form-group">
 			              <input type="text" class="form-control" id="pet_name" placeholder="Pet Name">
 			            </div>
 								</div>
                 <div class="col-md-6">
 									<div class="form-group">
 			              <input type="text" class="form-control" id="email" placeholder="Your Mail Id">
 			            </div>
 								</div>
 								<div class="col-md-6">
 									<div class="form-group">
 			              <input type="text" class="form-control" id="phone" placeholder="phone Number">
 			            </div>
 								</div>
                <div class="form-group">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
                      <select name="" id="pet_type" class="form-control">
                        <option value="animal">Select Animal</option>
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>

                      </select>
                    </div>
                  </div>
                </div>
 								<div class="col-md-6">
 									<div class="form-group">
 			    					<div class="input-wrap">
 			            		<div class="icon"><span class="fa fa-calendar"></span></div>
 			            		<input type="text" class="form-control appointment_date" id="date" placeholder="Date">
 		            		</div>
 			    				</div>
 								</div>
 								<dihv class="col-md-6">
 									<div class="form-group">
 			    					<div class="input-wrap">
 			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
 			            		<input type="text" class="form-control appointment_time" id="time" placeholder="Time">
 		            		</div>
 			    				</div>
 								</div>
 								<div class="col-md-12">
 									<div class="form-group">
 			              <textarea name="" id="" cols="30" rows="7" class="form-control" id="message" placeholder="Address"></textarea>
 			            </div>
 								</div>
 								<div class="col-md-12">
 									<div class="form-group">
 			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
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
