<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

    <?php $this->load->view('header1');?>
<?php $this->load->view('header2');?>
       
    <div class="right-column">
      <div class="right-column-content">
        <div class="w3_login_module">
				<div class="module form-module">
                                    <div class="form">
                                        <span style="color:black;font-size:20px; "><h2>Administrator Login</h2></span>
					
					<?php echo form_open('admin_controller/loginvalidation')?>
                                        <table><tr></tr><tr></tr> <tr> <input type="text" name="Username" placeholder="Username" required=" "><span  style="color: red"><?php echo form_error('Username');?></span></tr>
                                            <tr></tr><tr>  <input type="password" name="Password" placeholder="Password" required=" "><span  style="color: red"><?php echo form_error('Password');?></span></tr>
                                            <tr>  <input type="submit" value="Login"></table>
					</form>
                                        <div class="cta"><a href="#">Forgot your password?</a></div>
				  </div>
				  
				  
				</div>
			</div>
			