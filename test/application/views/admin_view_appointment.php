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
        
          <span style="color:black;font-size:20px; ">Appointment Requests</span>
         <?php
  
         if(isset($result))
        {
             echo "<table align=center>";
             echo"<tr align=center><td align=center>User Name </td><td align=center>&nbsp&nbsp</td><td align=center>Request date</td><td align=center>&nbsp&nbsp</td></tr>";      // $i=0;
             echo "</table >";
             foreach ($result as $value)
            {
           
                 echo "<table align=center>";
                //var_dump($value);
                $id =  $value->id;
                $user =  $value->user ;
                $date=$value->date ;
                
                
                
                echo " <tr align=center><td align=center>$id</td><td align=center>&nbsp&nbsp</td><td align=center>$user</td><td align=center>&nbsp&nbsp</td><td align=center>$date</td><td>&nbsp&nbsp</td><td align=center><td><td align=center><a href ='" . base_url(). "index.php/admin_controller/give_appointments/".$id."' >Give appointment</a></td></tr></table>";
                echo '<BR>'; 
            }   
            //echo("$i");
        }
        ?>
    </body>
        <?php $this->load->view('footerthemeone') ;?>
</html>
