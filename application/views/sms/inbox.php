<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('sms_template_label');?></h2>
    </div>
    <div class="contentbox">
	<table width="100%">
	    <thead>
		<tr>
		    <th><?php get_line('sms_phone');?></th>
		    <th><?php get_line('sms_content');?></th>
		    <th><?php get_line('sms_status_read');?></th>
		    <th>Opsi</th>
		</tr>
	    </thead>
	    <tbody>
				<?php
				    $q = $this->sms_inbox->all();
				    $i = 1;
				    $edit_label = get_line_item('edit');
				    $delete_label = get_line_item('delete');
				    $base = base_url();
				    
				    foreach($q as $row ){
				    $id_sms = $row->id_sms;
				    $no_kontak = $row->no_kontak;
				    $isi_sms = $row->isi_sms;
				    $status = $row->status_baca;
				    $edit_url = site_url("sms/template_edit/$id_sms");
				    $delete_url = site_url("sms/template_delete/$id_sms");
				    
				    if ($status == 0 ){
                                        $status_baca = "<span class=\"usagetxt greentxt\">Balum Dibaca</span>";
				    }else {
                                        $status_baca = "Sudah Dibaca";
				    }
				    
				    if (bcmod($i,'2') == 1){
					$r = 'class="alt"';
				    }else $r = '';
				    
				    echo "<tr $r>\n";
				    echo "<td>$no_kontak</td>\n";
				    echo "<td>$isi_sms</td>\n";
				    echo "<td>$status_baca</td>\n";
				    echo "<td class='option-width'>\n";
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
<?php $this->load->view("template/footer");?>