<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('contact_list');?></h2>
    </div>
    <div class="contentbox">
	<table width="100%">
	    <thead>
		<tr>
		    <th>Nama</th>
		    <th>Telp</th>
		    <th>Alamat</th>
		    <th>Opsi</th>
		</tr>
	    </thead>
	    <tbody>
				<?php
				    $kriteria = $this->kontaks->all($active=0);
				    $i = 1;
				    $edit_label = get_line_item('edit');
				    $delete_label = get_line_item('delete');
				    $activated_label = get_line_item('activated');
				    $base = base_url();
				   
				    foreach($kriteria as $row ){
					$nama = $row->nama;
					$id = $row->id_kontak;
					$tlp = $row->no_telp;
					$alamat = $row->alamat;
					$edit_url = site_url("kontak/edit/$id");
					$delete_url = site_url("kontak/delete/$id");
					$activated_url = site_url("kontak/activated/$id");
					if (bcmod($i,'2') == 0){
					    $r = 'class="alt"';
					}else $r = '';
					
					echo "<tr $r>\n";
					echo "<td>$nama</td>\n";
					echo "<td>$tlp</td>\n";
					echo "<td>$alamat</td>\n";
					echo "<td >\n";
					echo "<a href='$edit_url' title=\"$edit_label\" ><img alt=\"Edit\" src=\"$base/asset/img/icons/icon_edit.png\"></a>\n";
					echo "<a href='$activated_url' title=\"$activated_label\"><img alt=\"Delete\" src=\"$base/asset/img/icons/icon_approve.png\"></a>\n";
					echo "<a href='$delete_url' title=\"$delete_label\"><img alt=\"Delete\" src=\"$base/asset/img/icons/icon_delete.png\"></a>\n";
					echo "</td>\n";
					echo "</tr>\n";
					$i++;
				    }
				
				?>
	    </tbody>
	</table>

                <div style="clear: both;"></div>
         </div>
    </div>
<?php $this->load->view("template/footer");?>