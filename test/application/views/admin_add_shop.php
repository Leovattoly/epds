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
        
          <span style="color:black;font-size:20px; ">Enter new shop details</span>
        
					
					<?php echo form_open('admin_controller/shop_validation')?>
                                       Ration shop number <input type="text" name="shopid" placeholder="Ration shop number" required=" " ><span  style="color: red"><?php echo form_error('shopid');?></span>
                                        Owner name<input type="text" name="ownername" placeholder="Owner name" required=" "><span  style="color: red"><?php echo form_error('ownername');?></span>
                                        Location<input type="text" name="loc" placeholder="Locality" required=" "><span  style="color: red"><?php echo form_error('loc');?></span>
                                        Salesman<input type="text" name="salesman" placeholder="Salesmans's name" required=" "><span  style="color: red"><?php echo form_error('salesman');?></span>
                                        Number of Cards<input type="text" name="cards" placeholder="number of ration cards" required=" "><span  style="color: red"><?php echo form_error('cards');?></span>
                                        License End Date<br><input type="date" name="license" placeholder="License end date" required=" "> <span  style="color: red"><?php echo form_error('license');?></span><br><br>
                                        Distributor Id<input type="text" name="dist_id" placeholder="Distributor id" required=" "> <br><br><span  style="color: red"><?php echo form_error('dist_id');?></span>
					  
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
