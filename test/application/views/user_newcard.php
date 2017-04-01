<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <?php $this->load->view('header1');?>
         <?php $this->load->view('header2');?>
        <div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">Apply for new card details</span>
					
					
					<?php echo form_open('user_controller/card_validation')?>
                                       
                                        Owner name<input type="text" name="ownername" placeholder="Owner name" required=" "><span  style="color: red"><?php echo form_error('ownername');?></span>
                                        Location<input type="text" name="loc" placeholder="Locality" required=" "><span  style="color: red"><?php echo form_error('loc');?></span>
                                        Panchayath<input type="text" name="panchayath" placeholder=" name of your panchayath" required=" "><span  style="color: red"><?php echo form_error('panchayath');?></span>
                                        Number of members<input type="text" name="members" placeholder="number of members " required=" "><span  style="color: red"><?php echo form_error('members');?></span>
                                        vehicle details<br><select name="vehicle" > <option value="no">No vehicle</option>
                                           <option value="two wheeler">Two wheeler</option>
                                           <option value="three wheeler">Three wheeler</option>
                                           <option value="multi">multi</option></select><span  style="color: red"><?php echo form_error('vehicle');?></span>
                                        Area of house<input type="text" name="area" placeholder="Area of house" required=" "> <br><br><span  style="color: red"><?php echo form_error('area');?></span>
                                        Annual income<input type="text" name="income" placeholder="Annual income " required=" "><span  style="color: red"><?php echo form_error('income');?></span>
                                        Occupation<input type="text" name="occupation" placeholder=" " required="Occupation "><span  style="color: red"><?php echo form_error('occupation');?></span>
                                        gas <select name=gas > <option value="yes">Yes</option>
                                           <option value="no">No</option>
                                          </select><span  style="color: red"><?php echo form_error('gas');?></span>
                                     Electricity connection<select name=electricity > <option value="yes">Yes</option>
                                           <option value="no">No</option>
                                          </select><span  style="color: red"><?php echo form_error('electricity');?></span>
                                        
					  <input type="submit" value="ADD">
					</form>
				  </div>
				  <div class="form">
                                      <form>
                                          <h2>You are entering the details of a new shop<br>
                                          please fill the form and click on 'Add' to add the shop</h2>
                                      </form>
					
				  </div>
				 
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
        <?php
        // put your code here
        ?>
    </body>
 <?php $this->load->view('footerthemeone');?>
</html>
