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
        
        if(isset($shopid))
        {
             echo "<table align=center>";
             echo"<tr align=center><td align=center>Ration shop Number </td><td align=center>&nbsp&nbsp</td><td align=center>Owner Name</td><td align=center>&nbsp&nbsp</td><td align=center>Location</td><td>&nbsp&nbsp</td><td align=center></tr>";      // $i=0;
             echo "</table >";
             foreach ($shopid as $value)
            {
           
                 echo "<table align=center>";
                //var_dump($value);
                $shop_id =  $value->ration_shop_no;
                $location =  $value->location ;
                $ownersname=$value->owner_name ;
                
                
                
                echo " <tr align=center><td align=center>$shop_id</td><td align=center>&nbsp&nbsp</td><td align=center>$ownersname</td><td align=center>&nbsp&nbsp</td><td align=center>$location</td><td>&nbsp&nbsp</td><td align=center><td><a href='" . base_url(). "index.php/admin_controller/delete_shop/" . $shop_id . "/' >delete</a></td></tr></table>";
                echo '<BR>'; 
            }   
            //echo("$i");
        }
        ?>
    </body>
    <?php $this->load->view('footerthemeone');?>
</html>
