<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php $this->load->view('header1');?>
        <?php $this->load->view('header2');?>
        <title></title>
    </head>
    <body>
       <?php
        if(isset($result))
        {
        echo " <tr align=center><td align=center>Shop Id</td><td align=center>&nbsp&nbsp</td><td align=center>Date</td><td align=center>&nbsp&nbsp</td><td align=center>Rice(Kg)</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>Wheat(kg)</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>Sugar(Kg)</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>Kerosene(L)</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td>";

           
            foreach ($result as $value)
            {
              
                //var_dump($value);
             $shop =  $value->dist_id;
                $date=$value->date;
                $rice=$value->rice_qty;
                $wheat=  $value->wheat_qty;
                $sugar=$value->sugar_qty;
                $kerosene=$value->kerosene_qty;
                echo"<br>";
                echo "<table align=center>";
                echo " <tr align=center><td align=center>$shop</td><td align=center>&nbsp&nbsp</td><td align=center>$date</td><td align=center>&nbsp&nbsp</td><td align=center>$rice</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>$wheat</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>$sugar</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>$kerosene</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td>";
                
               
                 echo '<BR>';
            }
        }
        ?>
    </body>
</html>
