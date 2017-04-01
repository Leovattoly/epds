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
        
          <span style="color:black;font-size:20px; ">Enter distributor's details</span>
        
        <?php echo form_open('admin_controller/member_validation')?>
        <table align="center" class ="form">
            <tr>
                <td>Ration card no.: <td><input type="text" value="<?php echo isset($r_id)?$r_id:'';?>" name="rid" placeholder="Ration card number" required=" " readonly><br><br><span  style="color: red"><?php echo form_error('rid');?></span>
             </tr>  
          <tr>
       <td>Member name: <td> <input type="text" name="mname" placeholder="Member name" required=" "><br><br><span  style="color: red"><?php echo form_error('mname');?></span>
           </tr>
           <tr>
        <td>Date Of Birth:<td><input type="date" name="age" placeholder="Ration shop number" required=" "><br><br><span  style="color: red"><?php echo form_error('age');?></span>
            </tr>
            <tr>
                <td>Gender: <td><input type="radio" name="gender" value="Male"  required=" ">Male<input type="radio" name="gender" value="Female" placeholder="Female" required=" ">Female<br><br><span  style="color: red"><?php echo form_error('gender');?></span></td>
                </td>
           
            </tr>
            <tr>
           <td>Occupation:<td> <input type="text" name="occupation" placeholder="occupation" required=" "><br><br><span  style="color: red"><?php echo form_error('occupation');?></span>
             </tr>
             <tr>
        <td> Relation with card owner:<td><input type="text" name="relation" placeholder="Relation with card owner" required=" "> <br><br><span  style="color: red"><?php echo form_error('relation');?></span>
             </tr>
             <tr>
            <td><input type="submit" value="ADD">
                </tr>
                </table>
        </form>
        
       
    </body>
    <?php $this->load->view('footerthemeone') ;?>
</html>
