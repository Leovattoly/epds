<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8"><?php $this->load->view('header1');?>
        <?php $this->load->view('header2');?>
        <title></title>
    </head>
    <body>
        
       <?php
      
        if(isset($result))
        {
        echo " <tr align=center><td align=center>shop number</td></tr>";

           
            foreach ($result as $value)
            {
              
               //var_dump($value);
                $shop =  $value->shop_id;
                
              
                echo"<br>";
                echo "<table align=center>";
                echo " <tr align=center><td align=center>$shop</td><td align=center><a href ='" . base_url(). "index.php/dist_controller/view_allotment/".$shop ."' >view allotments</a></td>";
               echo"</table>";
                 echo '<BR>';
            }
        }
        ?>
 
    </body>
    <?php $this->load->view('footerthemeone');?> 
</html>
