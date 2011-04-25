<?php $this->load->view("template/header");?>
<?php $this->load->view("template/personal-nav");?>
<?php $this->load->view("template/main-nav");?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1><?php get_line('criteria_edit');?></h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="<?php echo base_url();?>/asset/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="<?php echo base_url();?>/asset/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>

	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<!-- start id-form -->
	<form action="<?php echo site_url("kriteria/edit_post/$id_kriteria");?>" method="POST">
	<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<?php
		    $kriteria = $this->kriterias->get($id_kriteria);
		?>
		<tr>
			<th valign="top"><?php get_line('criteria_name');?>:</th>
			<td><input type="text" class="inp-form" name="nama_kriteria" value="<?php echo $kriteria->kriteria; ?>"/></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top"><?php get_line('criteria_status');?>:</th>
			<td>
			    <select class="styledselect_form_1" name="status">
				<option value="1" <?php if($kriteria->status == 1 ){ echo "selected";}?>>Aktif</option>
				<option value="0" <?php if($kriteria->status == 0 ){ echo "selected";}?>>Tidak Aktif</option>
			    </select>
			</td>
			<td></td>
		</tr>

		<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	</form>
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->
<?php $this->load->view("template/footer");?>