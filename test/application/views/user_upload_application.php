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
        <?php echo form_open_multipart('user_controller/user_application_validation')?>
        
        <input type="file" name="application_up">
         <input type="submit" value="ADD">
         <?php
        echo isset($error)?$error:"";
        ?>
        
    </body>
     <?php $this->load->view('footerthemeone');?>
</html>
