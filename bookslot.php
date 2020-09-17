<?php
include('header.php');
include('connection.php');
?>

<div class="hero-wrap" style="background-image: url('images/bgbook_slot.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text  align-items-center justify-content-center" data-scrollax-parent="true">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half   pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Book Grooming Slot</h2>
    				<form method="post" action="bookslot_otp.php" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="pettype" id="pettype" class="form-control"  required>
							<option value="">Select Pet</option>
							<?php
							        $r1 = mysql_query("select distinct id,type from mypetspas_pettype");
									$i = 1;
									while(list($pettypeid,$pettypename) = mysql_fetch_array($r1))
									{
							?>
								<option value="<?php echo $pettypeid;?>"><?php echo $pettypename;?></option>
							<?php
									}
							?>
							</select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			                            <input type="text" class="form-control" id="customername" name="customername" placeholder="Your Name">
			                        </div>
								</div>
								
                                <div class="col-md-6">
									<div class="form-group">
			                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Mail Id">
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			                            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone Number">
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			                            <input type="text" class="form-control" id="petname" name="petname" placeholder="Pet Name">
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			                            <input type="number" class="form-control" id="petage" name="petage" placeholder="Pet Age">
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			                            <input type="text" class="form-control" id="breedname" name="breedname" placeholder="Breed">
			                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			                            <select name="servicetype" id="servicetype" class="form-control"  required>
                							<option value="">Select Service</option>
                						</select>
			                        </div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
								    <select id="availableslot" name="availableslot" class="form-control"  required>
                						<option value="">Select Available Slot</option>
								<?php 
    								$currentdate = date('Y-m-d');
    								$q2 = "Select s.id, s.slotdate, ts.slottimestart,ts.slottimeend,s.status from mypetspas_slots s join mypetspas_timeslots ts on s.timeslotid = ts.id where s.isactive = 1 and s.status <=2 and s.slotdate >= '$currentdate' order by s.slotdate, ts.slottimestart";
    								$r2 = mysql_query($q2);
            	                    while(list($slotid, $slotdate,$slottimestart,$slottimeend,$status)=mysql_fetch_array($r2)) 
            	                    {
            	                        $dayOfWeek = date("l", strtotime($slotdate));
        	                            $x1 = date('h:i:s A', strtotime($slottimestart));
        	                            $y1 = date('h:i:s A', strtotime($slottimeend));
        	                    ?>
        	                            <option value="<?php echo $slotid; ?>"><?php echo "Date : $slotdate  Time : $x1 - $y1 ($dayOfWeek)"; ?></option>
        	                    <?php
        	                        
        	                        }
								?>
								
                                        </select>
									    
			                        </div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Book Slot" id="submit_bookslot" name="submit_bookslot" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    </div>
  </div>
</div>

   

<script type="text/javascript">
var s1= document.getElementById("pettype");
var s2 = document.getElementById("servicetype");
s1.onchange = onchange; // change options when s1 is changed

function onchange() {
    cat_option_html = "<option value=''>Select</option>";
    dog_option_html = "<option value=''>Select</option>";
    
    <?php
            $r2 = mysql_query("SELECT st.id, st.servicename, st.packageprice FROM mypetspas_servicetype st join mypetspas_pettype pt on pt.id = st.pettypeid WHERE st.isactive = 1 and pettypeid = '1'");
    		while(list($servicetypeid, $servicename, $packageprice) = mysql_fetch_array($r2))
    		{
    ?>
    	cat_option_html += "<option value='<?php echo $servicetypeid;?>'><?php echo $servicename;?></option>";
    <?php
    		}
    ?>
    
    <?php
            $r2 = mysql_query("SELECT st.id, st.servicename, st.packageprice FROM mypetspas_servicetype st join mypetspas_pettype pt on pt.id = st.pettypeid WHERE st.isactive = 1 and pettypeid = '2'");
    		while(list($servicetypeid, $servicename, $servicedescription, $packageprice) = mysql_fetch_array($r2))
    		{
    ?>
    	dog_option_html += "<option value='<?php echo $servicetypeid;?>'><?php echo $servicename;?></option>";
    <?php
    		}
    ?>
    
    if(s1.value == '1') {
        s2.innerHTML = cat_option_html;
    }
    else if(s1.value == '2') {
        s2.innerHTML = dog_option_html;
    }
    else {
        s2.innerHTML = "<option value=''>Select</option>"
    }
    
    
}
</script>
		
		
    <?php
    include('footer.php')
     ?>
