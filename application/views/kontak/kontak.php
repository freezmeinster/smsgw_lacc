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
				    $kriteria = $this->kontaks->all();
				    $i = 1;
				    $edit_label = get_line_item('edit');
				    $delete_label = get_line_item('delete');
				    $base = base_url();
				   
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
					echo "<td>$nama</td>\n";
					echo "<td>$tlp</td>\n";
					echo "<td>$alamat</td>\n";
					echo "<td >\n";
					echo "<a href='$edit_url' title=\"$edit_label\" ><img alt=\"Edit\" src=\"$base/asset/img/icons/icon_edit.png\"></a>\n";
					echo "<a href='$delete_url' title=\"$delete_label\"><img alt=\"Delete\" src=\"$base/asset/img/icons/icon_delete.png\"></a>\n";
					echo "</td>\n";
					echo "</tr>\n";
					$i++;
				    }
				
				?>
	    </tbody>
	</table>

                <ul class="pagination">
                	<li class="text">Previous</li>
                    <li class="page"><a href="#" title="">1</a></li>
                    <li><a href="#" title="">2</a></li>
                    <li><a href="#" title="">3</a></li>
                    <li><a href="#" title="">4</a></li>

                    <li class="text"><a href="#" title="">Next</a></li>
                </ul>
                <div style="clear: both;"></div>
         </div>
    </div>
</div>
</div>
<?php $this->load->view("template/footer");?>