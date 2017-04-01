
        <?php $this->load->view('header1');?>
<?php $this->load->view('header2');?>
 <div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">Enter distributor's details</span>
        <?php echo form_open('admin_controller/distributor_validation')?>
        <table align="center" class ="form">
            <tr>
                <td>Distributor id :<td><input type="text"  name="distid" placeholder="Ration card number" required=" " ><br><br><span  style="color: red"><?php echo form_error('distid');?></span>
             </tr>  
          <tr>
       <td>Owners Name: <td> <input type="text" name="ownersname" placeholder="Owner name" required=" "><br><br><span  style="color: red"><?php echo form_error('ownersname');?></span>
           </tr>
           <tr>
        <td>Location::<td><input type="text" name="loc" placeholder="Ration shop number" required=" "><br><br><span  style="color: red"><?php echo form_error('loc');?></span>
            </tr>
            <tr>
       <td>Address: <td><input type="text" name="address" placeholder="Locality" required=" "><br><br><span  style="color: red"><?php echo form_error('address');?></span>
            </tr>
            <tr>
           <td>no.of Shops:<td> <input type="text" name="no_of_shops" placeholder="panchayath" required=" "><br><br><span  style="color: red"><?php echo form_error('no_of_shops');?></span>
             </tr>
           
             <tr>
            <td><input type="submit" value="ADD">
                </tr>
                </table>
        </form>
        
       
       
    </body>
    <?php $this->load->view('footerthemeone') ;?>
</html>
