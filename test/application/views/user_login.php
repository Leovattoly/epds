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
        
          <span style="color:black;font-size:20px; ">Login to your account</span>
					
					<?php echo form_open('user_controller/loginvalidation')?>
					  <input type="text" name="Username" placeholder="Username" required=" "><span  style="color: red"><?php echo form_error('Username');?></span>
					  <input type="password" name="Password" placeholder="Password" required=" "><span  style="color: red"><?php echo form_error('Password');?></span>
					  <input type="submit" value="Login">
					</form>
				  </div>
				  
					
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
