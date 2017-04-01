 <div class="searchform-container">
    <div class="searchform-content"></div>
    <div class="search">
      <div class="search-input">
        <input type="text" name="search" class="search-input-textfield" />
      </div>
      <div class="search-icon"><a href="#"><img src="<?php echo base_url(); ?>images/search-icon.png" alt="search" /></a></div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="page">
    <div class="main-banner"><img src="<?php echo base_url(); ?>images/banner.jpg" alt="banner" /></div>
    <div class="clear"></div>
    <div class="left-column">
      <?php /*<div class="dark-panel">
       
          <?php  // if($this->session->has_userdata('id'))
        //{ ?>
          <div class="dark-panel-top"></div>
        <div class="dark-panel-center">
          <ul>
            <li>
              <h1>Login</h1>
            </li>
            <li>
              <p>Login to your account</p>
             
					  
            </li>
             <?php echo form_open('admin_controller/loginvalidation')?>
            <li class="username">
              <input name="Username" type="text" class="login-input" />
            </li>
            <li class="password">
              <input name="Password" type="password" class="login-input" />
            </li>
            <li class="button"> <input type="submit" value="Login"></li>
          </ul>
        </div>
        <div class="dark-panel-bottom"></div>
        <?php // } ?>
      </div>*/ ?>
      <div class="light-panel">
        <div class="light-panel-top"></div>
        <div class="light-panel-center">
          <h1>Important Links</h1>
          <ul>
            <li><a href='<?php echo base_url()?>index.php/admin_controller/newuser'>+ Add new card</a></li>
            <li><a href='<?php echo base_url()?>index.php/admin_controller/add_distributor'>+ Add new distributor</a></li>
            <li><a href='<?php echo base_url()?>index.php/admin_controller/add_shop'>+ Add new shop</a></li>
            <li><a href='<?php echo base_url()?>index.php/admin_controller/view_cards'>+ Cards</a></li>
            <li><a href='<?php echo base_url()?>index.php/admin_controller/allotment'>+  Allotments</a></li>
            <li><a href='<?php echo base_url()?>index.php/admin_controller/login'>+ shops</a></li>
            <li class="no-border"><a href="#">+ Proin tempor magna vel sap</a></li>
          </ul>
        </div>
        <div class="light-panel-bottom"></div>
      </div>
      <div class="dark-panel">
        <div class="dark-panel-top"></div>
        <div class="dark-panel-center">
          <ul>
            <li>
              <h1>Aenean euctus</h1>
            </li>
            <li class="date">06-23-2012</li>
            <li class="news">Ut quis nibh nibh, eu interdum
              tiam nec orci ut dui tincidunt hend.</li>
            <li class="date">06-17-2012</li>
            <li class="news">Nam curus nunet velit molis elem<br />
              erat ut enimfrin pretium.</li>
            <li class="date">06-08-2012</li>
            <li class="news-no-border">Donec estin convallis slolicit cun<br />
              duis est trupis ligula.</li>
          </ul>
        </div>
        <div class="dark-panel-bottom"></div>
      </div>
    </div>