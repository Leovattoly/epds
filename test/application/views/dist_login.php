<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <head>
         <?php $this->load->view('header1');?>
<?php $this->load->view('header2');?>
        <meta charset="UTF-8">
        <title></title>
    </head>
<div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">Distributor login</span>
					<?php echo form_open('dist_controller/loginvalidation')?>
					  <input type="text" name="Username" placeholder="Username" required=" "><span  style="color: red"><?php echo form_error('Username');?></span>
					  <input type="password" name="Password" placeholder="Password" required=" "><span  style="color: red"><?php echo form_error('Password');?></span>
					  <input type="submit" value="Login">
					</form>
				  </div>
				  
     <?php $this->load->view('footerthemeone');?>

</html>
