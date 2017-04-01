<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php $this->load->view('header1');?>
<?php $this->load->view('header2');?>
        <div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">Apply for new card details</span>
    
       <?php echo form_open('admin_controller/regivalidation')?>
        <table align="center" class ="form">
            <tr>
                <td>Ration card no.: <td><input type="text" name="rid" placeholder="Ration card number" required=" "><br><br><span  style="color: red"><?php echo form_error('rid');?></span>
             </tr>  
          <tr>
       <td>Owner name: <td> <input type="text" name="name" placeholder="Owner name" required=" "><br><br><span  style="color: red"><?php echo form_error('name');?></span>
           </tr>
           <tr>
        <td>Ration shop no.:<td><input type="text" name="shopno" placeholder="Ration shop number" required=" "><br><br><span  style="color: red"><?php echo form_error('shopno');?></span>
            </tr>
            <tr>
       <td>locality: <td><input type="text" name="locality" placeholder="Locality" required=" "><br><br><span  style="color: red"><?php echo form_error('locality');?></span>
            </tr>
            <tr>
           <td>Panchayath:<td> <input type="text" name="panchayath" placeholder="panchayath" required=" "><br><br><span  style="color: red"><?php echo form_error('panchayath');?></span>
             </tr>
                          <tr>
            <td><input type="submit" value="Register">
                </tr>
                </table>
        </form>
        
    </body>
</html>
 <?php $this->load->view('footerthemeone');?>
