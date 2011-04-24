<?php $this->load->view("template/header");?>
<?php $this->load->view("template/personal-nav");?>
<?php $this->load->view("template/main-nav");?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Daftar Kontak</h1>
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
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nama</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">No Telp</a></th>
					<th class="table-header-repeat line-left"><a href="">Alamat</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
				<?php
				    $kriteria = $this->kontaks->all();
				    $i = 1;
				    $edit_label = get_line_item('edit');
				    $delete_label = get_line_item('delete');
				   
				    foreach($kriteria as $row ){
					$nama = $row->nama;
					$id = $row->id_kontak;
					$tlp = $row->no_telp;
					$alamat = $row->alamat;
					$edit_url = site_url("kontak/edit/$id");
					$delete_url = site_url("kontak/delete/$id");
					if (bcmod($i,'2') == 1){
					    $r = 'class="alternate-row"';
					}else $r = '';
					
					echo "<tr $r>\n";
					echo "<td><input type='checkbox'\></td>\n";
					echo "<td>$nama</td>\n";
					echo "<td>$tlp</td>\n";
					echo "<td>$alamat</td>\n";
					echo "<td class='options-width'>\n";
					echo "<a href='$edit_url' title=\"$edit_label\" class='icon-1 info-tooltip'\n></a>";
					echo "<a href='$delete_url' title=\"$delete_label\" class='icon-2 info-tooltip'\n></a>";
					echo "</td>\n";
					echo "</tr>\n";
					$i++;
				    }
				
				?>
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

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->
<?php $this->load->view("template/footer");?>