<?php
include('header.php')
?>

<div class="hero-wrap" style="background-image: url('images/bg_training.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text  align-items-center justify-content-center" data-scrollax-parent="true">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half  pl-lg-5 ftco-animate">
    				<h2 class="mb-1" style="color:white;">Book Training</h2>
    				<form action="booktraining_mail.php" method="POST" class="appointment">
    					<div class="row">

								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="address" name="address" placeholder="Your Address">
			            </div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="email" name="email" placeholder="Your Mail Id">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number">
			            </div>
								</div>

                <div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="pet_name" name="pet_name" placeholder="Pet Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="pet_breed" name="pet_breed" placeholder="Pet Breed">
			            </div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="pet_color" name="pet_color" placeholder="Pet Color">
			            </div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" id="pet_dob" name="pet_dob" placeholder="Pet Date of birth">
		            		</div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_sex" name="pet_sex" class="form-control">
	                      	<option value="">Pet Sex</option>
	                        <option value="male">Male</option>
	                        <option value="female">Female</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_desexed" name="pet_desexed" class="form-control">
	                      	<option value="">De-sexed?</option>
	                        <option value="yes">YES</option>
	                        <option value="no">NO</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" id="pet_dov" name="pet_dov" placeholder="Pet Date of Vaccination">
		            		</div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" id="pet_dodw" name="pet_dodw" placeholder="Pet Date of Deworming">
		            		</div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="pet_place" name="pet_place" placeholder="Where did you buy your Pet">
			            </div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" id="pet_awp" name="pet_awp" placeholder="Age of Pet When Purchased">
			            </div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="first_pets" name="first_pets" class="form-control">
	                      	<option value="">Is this your first Dog?</option>
	                        <option value="yes">YES</option>
	                        <option value="no">NO</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="other_pets" name="other_pets" class="form-control">
	                      	<option value="">You have Other pets?</option>
	                        <option value="yes">YES</option>
	                        <option value="no">NO</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh1" name="pet_beh1" class="form-control">
	                      	<option value="">Sit On Request</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh2" name="pet_beh2" class="form-control">
	                      	<option value="">Stay on request</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh3" name="pet_beh3" class="form-control">
	                      	<option value="">Respond to Name</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh4" name="pet_beh4" class="form-control">
	                      	<option value="">Come when called</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh5" name="pet_beh5" class="form-control">
	                      	<option value="">Go to bed on request</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh6" name="pet_beh6" class="form-control">
	                      	<option value="">Lay down on request</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh7" name="pet_beh7" class="form-control">
	                      	<option value="">Sociable with other animals</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh8" name="pet_beh8" class="form-control">
	                      	<option value="">Walk on a loose leash (no pulling)</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh9" name="pet_beh9" class="form-control">
	                      	<option value="">Sociable with people (no jumping)</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_beh10" name="pet_beh10" class="form-control">
	                      	<option value="">Give eye contact when responding to Name</option>
	                        <option value="Everytimes">Everytimes</option>
	                        <option value="Sometimes">Sometimes</option>
                          <option value="NO">No</option>

	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Next" class="btn btn-primary py-3 px-4">
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
