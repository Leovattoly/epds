<!DOCTYPE html>

         <?php $this->load->view('header1');?>
        <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $this->load->view('header2');?>
       
    <div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">Enter new shop details</span>
					<?php echo form_open('admin_controller/distshop_validation')?>
                                        <?php if(isset($dist_id))
        
                                       { ?>
                                        Distributor id<br><select name="distid" >
                                         <?php 
                                         foreach($dist_id as $value)
                                          {
                                           $dist_id =  $value->dist_id;
                                           
                                           
                                           
                                           echo '<option value="'.$dist_id.'">'.$dist_id.'</option>';
                                          }
                                         
                                          ?>
                                        </select><span  style="color: red"><?php echo form_error('distid');?></span>
                                            <?php
                                           }
                                           ?>
                                        <?php if(isset($shop))
        
                                       { ?>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ration shops<select name="shopid" >
                                         <?php 
                                         foreach($shop as $value)
                                          {
                                           $shop =  $value->ration_shop_no;
                                           
                                           
                                           
                                           echo '<option value="'.$shop.'">'.$shop.'</option>';
                                          }
                                          ?>
                                        </select><span  style="color: red"><?php echo form_error('shopid');?></span>
                                            <?php
                                           }
                                           ?>
                                           
                                        
					  
					  <input type="submit" value="ADD">
					</form>
				  
      </div>
    
   
	</div>
        <?php
        // put your code here
        ?>
    </body>
<?php $this->load->view('footerthemeone'); ?>
</html>
