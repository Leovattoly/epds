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
        
        <a href='<?php echo base_url()?>index.php/shop_owner_controller/stock_updation'  class="active">Update accounts</a>
        
    </body>
     <?php $this->load->view('footerthemeone');?>
</html>
