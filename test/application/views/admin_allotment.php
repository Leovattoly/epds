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
        <?php $this->load->view('admin_header');?>
     <div class="right-column">
      <div class="right-column-content">
        
          <span style="color:black;font-size:20px; ">ALLOTMENTS</span>
        <?php
        echo "<br><br><a href='allotments' >* item allotment</a>";
        echo "<br> <a href='view_cards' >* Shop allotment</a>";
        ?>
    </body>
     <?php $this->load->view('footerthemeone');?>
</html>
