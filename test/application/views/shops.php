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
    </head>
    <body>
       <?php echo form_open('admin_controller/view_shop')?>
        Ration shop number: <input type="text" name="rid" placeholder="Ration shop number" required=" "><br><span  style="color: red"><?php echo form_error('rid');?></span>
        <br> <input type="submit" value="submit">?>
    </body>
</html>
