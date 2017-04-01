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
    <div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">Enter new shop details</span>
       <a href='<?php echo base_url()?>index.php/dist_controller/view_allotments' >View Allotments</a>
       <br>
       <a href='<?php echo base_url()?>index.php/dist_controller/dist_account_update' >Update Accounts </a>
       <br><br><a href='<?php echo base_url()?>index.php/dist_controller/view_dists_shops1' >view shops</a>";

    </body>
     <?php $this->load->view('footerthemeone');?>
</html>
