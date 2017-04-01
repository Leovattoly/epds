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
        <?php echo form_open('dist_controller/allocate')?>
       <?php
      
        if(isset($result))
        {
        echo " <tr align=center><td align=center>Item code</td><td align=center>&nbsp&nbsp</td><td align=center>Quantity</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>Card Type</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>Price</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center></a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td>";

           
            foreach ($result as $value)
            {
              
               //var_dump($value);
                
                $qty=$value->quantity;
                $ctype=$value->cardtype;
                $price=  $value->price;
                $itemcode=$value->itemcode;
                $shop_id=$value->shop_id;
              
                echo"<br>";
                echo "<table align=center>";
                echo " <tr align=center><td align=center>$itemcode</td><td align=center>&nbsp&nbsp</td><td align=center>$qty</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>$ctype</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center>$price</a></td><td>&nbsp&nbsp</td></td><td>&nbsp&nbsp</td><td align=center></a></td><td><a href ='" . base_url(). "index.php/dist_controller/allocate/".$shop_id ."' >Update</a></td></td><td>&nbsp&nbsp</td><td>";
                
               
                 echo '<BR>';
            }
        }
       
        ?>
 
    </body>
</html>
