		<?php 	$now = $this->uri->segment(1);
			$now2 = $this->uri->segment(2); 
		?>
		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select <?php if($now == 'core'){ echo "current" ;}?>"><li><a href="<?php echo site_url("core/dashboard"); ?>"><b><?php get_line('core_main_nav');?></b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="#nogo"><?php get_line('core_sms_record_nav');?></a></li>
				<li><a href="#nogo"><?php get_line('core_group_record_nav');?></a></li>
				<li><a href="#nogo"><?php get_line('core_criteria_record_nav');?></a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select <?php if($now == 'kontak'){ echo "current" ;}?>"><li><a href="<?php echo site_url("kontak/"); ?>"><b><?php get_line('contact_main_nav');?></b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo site_url('kontak/add');?>"><?php get_line('contact_add');?></a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select <?php if($now == 'sms'){ echo "current" ;}?>"><li><a href="<?php echo site_url("sms/"); ?>"><b><?php get_line('sms_main_nav');?></b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo site_url("sms/template"); ?>"><?php get_line('sms_template_nav');?></a></li>
				<li><a href="<?php echo site_url("sms/inbox"); ?>"><?php get_line('sms_inbox');?></a></li>
				<li><a href="<?php echo site_url("sms/outbox"); ?>"><?php get_line('sms_outbox');?></a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select <?php if($now == 'group'){ echo "current" ;}?>"><li><a href="<?php echo site_url("group/"); ?>"><b><?php get_line('group_main_nav');?></b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="#nogo">Categories Details 1</a></li>
				<li><a href="#nogo">Categories Details 2</a></li>
				<li><a href="#nogo">Categories Details 3</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select <?php if($now == 'kriteria'){ echo "current" ;}?>"><li><a href="<?php echo site_url("kriteria"); ?>"><b><?php get_line('criteria_main_nav');?></b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo site_url('kriteria/add');?>"><?php get_line('criteria_add');?></a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->