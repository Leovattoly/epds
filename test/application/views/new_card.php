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
        <?php 
        // put your code here
        
        echo"<b>STEPS TO FOLLOW</b><br>"
        . "1.Download the form given below<br>"
                . "2.Fill the form<br>"
                . "3.Upload the form";
                  ?>
        <br><br> <a href='<?php echo base_url()?>forms/Application For New Card.pdf'  target="_b">DOWNLOAD</a>
       <a href='<?php echo base_url()?>index.php/user_controller/upload_application' >UPLOAD</a>
    </body>
     <?php $this->load->view('footerthemeone');?>
</html>
