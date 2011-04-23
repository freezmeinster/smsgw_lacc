<?php $this->load->view("template/header");?>
<?php $this->load->view("template/personal-nav");?>
<?php $this->load->view("template/main-nav");?>

  <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1><?php get_line('sms_template_label');?></h1>
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
				    
			    <div id="table-content">
				<form action="<?php echo site_url('sms/new_template');?>" method="POST">
				<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
			    
				    <tr>
					<th valign="top"><?php get_line('sms_criteria');?>:</th>
					<td>	
					    <select  class="styledselect_form_1" name="id_kriteria">
						<?php
						    $q = $this->kriterias->all();
						    foreach($q as $row){
							$id = $row->id_kriteria;
							$nama = $row->nama_kriteria;
							echo "<option value=\"$id\">$nama</option>\n";
						    }
						?>
					    </select>

				    </tr> 
			    
				    <tr>
					<th valign="top"><?php get_line('sms_content');?>:</th>
					<td><textarea rows="" cols="" class="form-textarea" name="pesan"></textarea></td>
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
			    
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href=""><?php get_line('sms');?></a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href=""><?php get_line('sms_criteria');?></a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
				<tr>
					<td><input type="checkbox"/></td>
					<td>sfsf</td>
					<td>assssssssss</td>
					<td class="options-width">
					<a href="" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="" title="Edit" class="icon-2 info-tooltip"></a>
					<a href="" title="Edit" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
				<tr class="alternate-row">
					<td><input  type="checkbox"/></td>
					<td>Sabev</td>
					<td>asasss</td>
					<td class="options-width">
					<a href="" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="" title="Edit" class="icon-2 info-tooltip"></a>
					<a href="" title="Edit" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
				
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
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