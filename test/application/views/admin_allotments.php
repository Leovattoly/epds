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
        
          <span style="color:black;font-size:20px; ">Enter new shop details</span>
        	<?php echo form_open('admin_controller/allotment_validation')?>
                                       item code <input type="text" name="itemcode" placeholder="code number of item" required=" " ><span  style="color: red"><?php echo form_error('itemcode');?></span>
                                       Card type<br><select name="cardtype" > <option value="apl non-subdidu">APL Non-Subsidy</option>
                                           <option value="apl subsidy">APL Subsidy</option>
                                           <option value="bpl">BPL</option>
                                           <option value="aay">AAY</option></select><span  style="color: red"><?php echo form_error('cardtype');?></span>
                                        <br><br>Quantity<input type="text" name="qty" placeholder="Quantity" required=" "><span  style="color: red"><?php echo form_error('qty');?></span>
                                        Price<input type="text" name="price" placeholder="Price" required=" "><span  style="color: red"><?php echo form_error('price');?></span>
                                    
					  
					  <input type="submit" value="ADD">
					</form>
				 
<?php $this->load->view('footerthemeone');?>
</html>
