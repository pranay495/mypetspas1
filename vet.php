<?php
include('header.php')
?>

<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text  align-items-center justify-content-center" data-scrollax-parent="true">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half   pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Book Consultation</h2>
    				<form action="book_vet.php" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="pet_type" class="form-control">
	                      	<option value="">Select Animal</option>
	                        <option value="">Cat</option>
	                        <option value="">Dog</option>

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
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" id="date" placeholder="Date">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
			            		<input type="text" class="form-control appointment_time" id="time" placeholder="Time">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" id="message" placeholder="Message"></textarea>
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

    <!-- <section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Lloyd Wilson</h3>
								<span class="position mb-2">Health Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-2.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Rachel Parker</h3>
								<span class="position mb-2">Life &amp; Business Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-3.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Ian Smith</h3>
								<span class="position mb-2">Executive Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-4.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Alicia Henderson</h3>
								<span class="position mb-2">Health Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-5.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Lloyd Wilson</h3>
								<span class="position mb-2">Executive Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-6.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Rachel Parker</h3>
								<span class="position mb-2">Health Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-7.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Ian Smith</h3>
								<span class="position mb-2">Health Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff-8.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Fred Henderson</h3>
								<span class="position mb-2">Executive Coach</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
    <?php
    include('footer.php')
     ?>
