<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('group_list');?></h2>
    </div>
    <div class="contentbox">
	<table width="100%">
	    <thead>
		<tr>
		    <th><?php get_line('group_name');?></th>
		    <th><?php get_line('group_desc');?></th>
		    <th>Opsi</th>
		</tr>
	    </thead>
	    <tbody>
				
				<?php
				    $kriteria = $this->kriterias->all();
				    $i = 1;
				    $edit_label = get_line_item('edit');
				    $delete_label = get_line_item('delete');
				   
				    foreach($kriteria as $row ){
					$nama = $row->nama_kriteria;
					$id = $row->id_kriteria;
					$s = $row->status;
					$edit_url = site_url("kriteria/edit/$id");
					$delete_url = site_url("kriteria/delete/$id");
					if (bcmod($i,'2') == 1){
					    $r = 'class="alternate-row"';
					}else $r = '';
					
					if ($s == 1 ){
					    $stat = "Aktif";
					}else $stat = "Tidak Aktif";
					
					echo "<tr $r>\n";
					echo "<td><input type='checkbox'\></td>\n";
					echo "<td>$nama</td>\n";
					echo "<td>$stat</td>\n";
					echo "<td class='options-width'>\n";
					echo "<a href='$edit_url' title=\"$edit_label\" class='icon-1 info-tooltip'\n></a>";
					echo "<a href='$delete_url' title=\"$delete_label\" class='icon-2 info-tooltip'\n></a>";
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
<?php $this->load->view("template/footer");?>