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
        <?php $this->load->view('admin_header');?>
    </head>>
    <body> <?php echo form_open('admin_controller/appointment_add_date') ?>
      <input type="date" name="alloc_date" placeholder="date" required=" "><span  style="color: red"><?php echo form_error('Date');?></span>
      
        number: <td><input type="hidden" value="<?php echo isset($appointment_id)?$appointment_id:'';?>" name="appointment_id">
        <input type="submit" value="ADD">
   <?php $this->load->view('footerthemeone');?>
</html>
