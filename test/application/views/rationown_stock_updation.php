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
        </head>
    <body>
        <div class="form">
       <h1 align ="center">Stock Updation</h1>
       <br><br><br>
      <?php echo form_open('shop_owner_controller/account_updat_validation')?>
       <table align="center" >
           
           <tr><th>Date<th><th> <input type  =date name="update_acc_date"></tr>
           <tr></tr>
           <tr><th>Rice</th><th><th><input type="number"  placeholder="Quantity" required=" " name="rice_qty"><br><br><span  style="color: red"><?php echo form_error('distid');?></span></th></tr>
           <tr></tr>
           <tr><th>Wheat</th><th><th><input type="number" placeholder="Quntity" required=" " name="wheat_qty"><br><br><span  style="color: red"><?php echo form_error('distid');?></span></th></tr>
           <tr></tr> 
           <tr><th>Sugar</th><th><th><input type="number" placeholder="Quantity" required=" " name="sugar_qty"><br><br><span  style="color: red"><?php echo form_error('distid');?></span></th></tr>
           <tr></tr>
           <tr><th>kerosene</th><th><th><input type="number" placeholder="Quantity" required=" " name="kerosene_qty"><br><br><span  style="color: red"><?php echo form_error('distid');?></span></th></tr>
           <tr></tr>
           <tr></tr>
           <tr><input type="submit" name =stock_sub value="Update"></tr>
           </table>
      
           </div>
    </body>
    <?php $this->load->view('footerthemeone') ;?>
</html>
