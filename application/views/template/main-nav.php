		<?php 	$now = $this->uri->segment(1);
			$now2 = $this->uri->segment(2); 
		?>
		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select <?php if($now == 'core'){ echo "current" ;}?>"><li><a href="<?php echo site_url("core/dashboard"); ?>"><b>Dashboard</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <?php if($now != ''){ echo "show" ;}?>">
			<ul class="sub">
				<li><a href="#nogo">Catatan Sms</a></li>
				<li><a href="#nogo">Catatan Group</a></li>
				<li><a href="#nogo">Catatan Kriteria</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select <?php if($now == 'kontak'){ echo "current" ;}?>"><li><a href="<?php echo site_url("kontak/"); ?>"><b>Kontak</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <?php if($now2 != ''){ echo "show" ;}?>">
			<ul class="sub">
				<li><a href="#nogo">Lihat Semua Sms</a></li>
				<li><a href="#nogo">Template Sms</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select <?php if($now == 'sms'){ echo "current" ;}?>"><li><a href="<?php echo site_url("sms/"); ?>"><b>Sms</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <?php if($now2 != ''){ echo "show" ;}?>">
			<ul class="sub">
				<li><a href="#nogo">Lihat Semua Sms</a></li>
				<li><a href="#nogo">Template Sms</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select <?php if($now == 'group'){ echo "current" ;}?>"><li><a href="<?php echo site_url("group/"); ?>"><b>Group</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <?php if($now2 != ''){ echo "show" ;}?>">
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
		
		<ul class="select <?php if($now == 'kriteria'){ echo "current" ;}?>"><li><a href="<?php echo site_url("kriteria"); ?>"><b>Kriteria</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <?php if($now2 != ''){ echo "show" ;}?>">
			<ul class="sub">
				<li><a href="#nogo">Clients Details 1</a></li>
				<li><a href="#nogo">Clients Details 2</a></li>
				<li><a href="#nogo">Clients Details 3</a></li>
			 
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