<?php $this->load->view('header');?>
<div class="form">
					<h2>Login to your account</h2>
					<?php echo form_open('regi_controller/loginvalidation')?>
					  <input type="text" name="Username" placeholder="Username" required=" "><span  style="color: red"><?php echo form_error('Username');?></span>
					  <input type="password" name="Password" placeholder="Password" required=" "><span  style="color: red"><?php echo form_error('Password');?></span>
					  <input type="submit" value="Login">
					</form>
				  </div>
<?php $this->load->view('footer');?>