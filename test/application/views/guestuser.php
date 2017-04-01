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
        
          <span style="color:black;font-size:20px; ">Create an account</span>
			
					<?php echo form_open('user_controller/guest_validation')?>
                                         <table>
                                             <tr><td> Name</td><td> <input type="text" name="name" placeholder="Enter Your Name" required=" " ><span  style="color: red"><?php echo form_error('name');?></span></td></tr>
                                              <tr></tr><tr></tr> <tr><td> Adhaar number</td><td><input type="text" name="adhaar" placeholder="Enter your adhaar number" required=" "><span  style="color: red"><?php echo form_error('adhaar');?></span></td></tr>
                                             <tr></tr> <tr></tr> <tr> <td>Gender</td><td><select name="gender" > <option value="female">Female</option>
                                
                                           <option value="Male">Male</option>
                                           <option value="Others">Others</option></select><span  style="color: red"><?php echo form_error('gender');?></span></td></tr>
                                       
                                            <tr></tr>  <tr></tr> <tr><td> Mobile</td><td><input type="text" name="mobile" placeholder="Enter Mobile Number" required=" "><span  style="color: red"><?php echo form_error('mobile');?></span></td></tr>
                                        <tr></tr> <tr></tr> <tr><td> E-mail</td><td><input type="text" name="email" placeholder="Enter Your E-mail Id" required=" "><span  style="color: red"><?php echo form_error('email');?></span></td></tr>
                                       <tr></tr> <tr></tr> <tr><td> Username</td><td><input type="text" name="username" placeholder="Enter the Username" required=" "> <span  style="color: red"><?php echo form_error('username');?></span></td></tr>
                                       <tr></tr> <tr></tr> <tr><td> Password</td><td><input type="password" name="password" placeholder="Enter the Password" required=" "> <br><br><span  style="color: red"><?php echo form_error('password');?></span></td></tr>
					  
                                       <tr></tr><tr></tr><tr><td> <input type="submit" value="REGISTER"></td></tr>
                                         </table>
					</form>
				  </div>
				  
 <?php $this->load->view('footerthemeone');?>
</html>
