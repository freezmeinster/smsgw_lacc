   <!-- Content Box End -->
        <div id="footer">
        	&copy; Copyright 2011 http://glue.bramandityo.com
        </div> 
          
    </div>
    <!-- Right Side/Main Content End -->
    
        <!-- Left Dark Bar Start -->
    <div id="leftside">
    	<div class="user">
        	<img SRC="<?php echo base_url();?>/img/avatar.png" width="44" height="44" class="hoverimg" alt="Avatar" />
            <p>Logged in as:</p>
            <p class="username">Bersyukur</p>
            <p class="userbtn"><a href="#" title="">Profile</a></p>
            <p class="userbtn"><a href="#" title="">Log out</a></p>
        </div>
        <div class="notifications">
        	<p class="notifycount"><a href="" title="" class="notifypop">2</a></p>
            <p><a href="" title="" class="notifypop">Pemberitahuan Baru</a></p>
            <p class="smltxt">(Klik Untuk membuka Pemberitahuan)</p>
        </div>
        
        <ul id="nav">
        <li>
        	<a class="expanded heading"><?php get_line('sms_main_nav');?></a>
                <ul class="navigation">
                    <li><a href="#" title=""><?php get_line('sms_inbox');?></a></li>
                     <li><a href="#" title=""><?php get_line('sms_outbox');?></a></li>
                </ul>
            </li>

               <li>
        	<a class="expanded heading"><?php get_line('sms_template_nav');?></a>
                <ul class="navigation">
                    
                    <li><a href="<?php echo site_url('sms/template');?>" title=""><?php get_line('sms_template_nav');?></a></li>
		    <li><a href="<?php echo site_url('sms/template_add');?>" title=""><?php get_line('sms_template_add');?></a></li>
                </ul>
            </li>
        	<li>
        	<a class="expanded heading"><?php get_line('contact_main_nav');?></a>
                <ul class="navigation">
                    
                    <li><a href="<?php echo site_url('kontak');?>" title=""><?php get_line('contact_list');?></a></li>
                    <li><a href="<?php echo site_url('kontak/add');?>" title=""><?php get_line('contact_add');?></a></li>
                </ul>
            </li>
            <li>
                <a class="expanded heading"><?php get_line('group_main_nav');?></a>
                 <ul class="navigation">
                    <li><a href="<?php echo site_url('group');?>" title=""><?php get_line('group_list');?></a></li>
                    <li><a href="<?php echo site_url('group/add');?>" title=""><?php get_line('group_add');?></a></li>
                </ul>
            </li>
            <li>
               <a class="expanded heading"><?php get_line('criteria_main_nav');?></a>
                 <ul class="navigation">
                    <li><a href="<?php echo site_url('kriteria');?>" title=""><?php get_line('criteria_list');?></a></li>
                    <li><a href="<?php echo site_url('kriteria/add');?>" title=""><?php get_line('criteria_add');?></a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Left Dark Bar End --> 
    
    <!-- Notifications Box/Pop-Up Start --> 
    <div id="notificationsbox">
        <h4>Notifications</h4>
        <ul>
            <li>
            	<a href="#" title=""><img SRC="<?php echo base_url();?>/asset/img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New member registration</a></h5>
                <p>Admin eve joined on 18.12.2010</p>
            </li>
        </ul>
        <p class="loadmore"><a href="#" title="">Load more notifications</a></p>
    </div>
    <!-- Notifications Box/Pop-Up End --> 
    
    <script type="text/javascript" SRC="<?php echo base_url();?>/asset/scripts/enhance.js"></script>	
    <script type='text/javascript' SRC="<?php echo base_url();?>/asset/scripts/excanvas.js"></script>
	<script type='text/javascript' SRC="<?php echo base_url();?>/asset/scripts/jquery.min.js"></script>
    <script type='text/javascript' SRC="<?php echo base_url();?>/asset/scripts/jquery-ui.min.js"></script>
	<script type='text/javascript' SRC="<?php echo base_url();?>/asset/scripts/jquery.wysiwyg.js"></script>
    <script type='text/javascript' SRC="<?php echo base_url();?>/asset/scripts/visualize.jQuery.js"></script>
    <script type="text/javascript" SRC="<?php echo base_url();?>/asset/scripts/functions.js"></script>
    
    <!--[if IE 6]>
    <script type='text/javascript' src='scripts/png_fix.js'></script>
    <script type='text/javascript'>
      DD_belatedPNG.fix('img, .notifycount, .selected');
    </script>
    <![endif]--> 
</body>
</html>
