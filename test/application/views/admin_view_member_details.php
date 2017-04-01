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
  
         if(isset($member))
        {
             echo "<table align=center>";
             echo"<tr align=center><td align=center>Ration Card Number </td><td align=center>&nbsp&nbsp</td><td align=center>Member Name</td><td align=center>&nbsp&nbsp</td><td align=center>Member Age</td><td>&nbsp&nbsp</td><td align=center></tr>";      // $i=0;
             echo "</table >";
             foreach ($member as $value)
            {
           
                 echo "<table align=center>";
                //var_dump($value);
                $ration_id =  $value->ration_id;
                $member_id =  $value->member_id;
                $member=$value->member_name;
                $age=$value->member_age;
                
                
                echo " <tr align=center><td align=center>$ration_id</td><td align=center>&nbsp&nbsp</td><td align=center>$member</td><td align=center>&nbsp&nbsp</td><td align=center>$age</td><td>&nbsp&nbsp</td><td align=center><td><a href='" . base_url(). "index.php/admin_controller/delete_member/" . $member_id . "/" .$ration_id ."' >delete</a></td></tr></table>";
                echo '<BR>'; 
            }   
            //echo("$i");
        }
        ?>
    </body>
    <?php $this->load->view('footerthemeone');?>
</html>
