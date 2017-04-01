<!DOCTYPE html>

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
        if(isset($cards))
        {
           
            foreach ($cards as $value)
            {
              
                //var_dump($value);
                $ration_id =  $value->ration_id;
                $owner=$value->owner_name;
                $member=$value->no_members;
                echo "<table align=center>";
                echo " <tr align=center><td align=center>$ration_id</td><td align=center>&nbsp&nbsp</td><td align=center>$owner</td><td align=center>&nbsp&nbsp</td><td align=center><a href ='" . base_url(). "index.php/admin_controller/view_member/".$ration_id ."' >$member</a></td><td>&nbsp&nbsp</td><td align=center><a href='" . base_url(). "index.php/admin_controller/add_member/".$ration_id ."' >Add members</a></td><td>&nbsp&nbsp</td><td><a href='". base_url(). "index.php/admin_controller/delete_user/".$ration_id ."' >Delete</a></td></tr></table>";
                
               // echo "<CENTER><a href='" . base_url(). "index.php/admin_controller/add_member/".$ration_id."' >" . $ration_id . "</a>";
                // <td><a href='" . base_url(). "index.php/admin_controller/add_member/".$ration_id ."' >Add members</a>";
                 echo '<BR>';
            }
        }
        ?>
    <BR>
    <BR>
    </body>
     <?php $this->load->view('footerthemeone');?>
</html>
