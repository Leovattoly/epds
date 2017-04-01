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
    <div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">Enter new shop details</span>
					<?php echo form_open('admin_controller/allotshop_validation')?>
                                          <?php if(isset($shop))
        
                                       { ?>
                                        shop id<br><select name="shop" >
                                         <?php 
                                         foreach($shop as $value)
                                          {
                                           $shop =  $value->ration_shop_no;
                                           
                                           
                                           
                                           echo '<option value="'.$shop.'">'.$shop.'</option>';
                                          }
                                         
                                          ?>
                                        </select><span  style="color: red"><?php echo form_error('shop');?></span>
                                            <?php
                                           }
                                           ?>
                                        <?php if(isset($item))
        
                                       { ?>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp items<select name="item" >
                                         <?php 
                                         foreach($item as $value)
                                          {
                                           $item =  $value->id;
                                           
                                           
                                           
                                           echo '<option value="'.$item.'">'.$item.'</option>';
                                          }
                                          ?>
                                        </select><span  style="color: red"><?php echo form_error('item');?></span>
                                            <?php
                                           }
                                           ?>
                                           
                                        
					  
					  <input type="submit" value="ADD">
					</form>
   
    
</html>
