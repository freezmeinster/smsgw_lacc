<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
        <h2><?php get_line('contact_history');?></h2>
    </div>
    <div class="contentbox">
        <table width="100%">
            <thead>
                <tr>
                    <th><?php get_line('sms_receiver');?></th>
                    <th><?php get_line('sms_phone');?></th>
                    <th><?php get_line('sms_content');?></th>
                    <th><?php get_line('sms_criteria');?></th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                                <?php
                                    $q = $this->sms_outbox->all();
                                    $i = 1;
                                    $edit_label = get_line_item('edit');
                                    $delete_label = get_line_item('delete');
                                    $base = base_url();
                                    
                                    foreach($q as $row ){
                                    $id_sms = $row->id_sms;
                                    $kriteria = $row->nama_kriteria;
                                    $nama_penerima = $row->nama;
                                    $no_telp = $row->no_telp;
                                    $pesan = $row->isi_sms;
                                    $edit_url = site_url("sms/outbox_edit/$id_sms");
                                    $delete_url = site_url("sms/outbox_delete/$id_sms");
                                    
                                    if (bcmod($i,'2') == 0){
                                        $r = 'class="alt"';
                                    }else $r = '';
                                    
                                    echo "<tr $r>\n";
                                    echo "<td><a href=\"\">$nama_penerima</a></td>\n";
                                    echo "<td>$no_telp</td>\n";
                                    echo "<td>$pesan</td>\n";
                                    echo "<td>$kriteria</td>\n";
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

                <div style="clear: both;"></div>
         </div>
    </div>
    
    <div class="contentcontainer med left">
    <div class="headings altheading">
        <h2><?php get_line('contact_note_add');?></h2>
    </div>
    <div class="contentbox">
    <form method="POST" action="<?php echo site_url("kontak/note_add/$id_kontak");?>">
    <textarea style="width: 704px;" id="wysiwyg" name="note" ></textarea>
    <br/>
    <input class="btn" type="submit" value="Submit">
    </form>
    <div style="clear: both;"></div>
         </div>
    </div>
    
    <div class="contentcontainer sml right">
    <div class="headings altheading">
        <h2><?php get_line('contact_note');?></h2>
    </div>
    <div class="contentbox">
      <div class="noticebox">
                    <div class="innernotice">
                        <?php echo $this->kontaks->get_note($id_kontak);?>
                    </div>
                </div>
    <div style="clear: both;"></div>
         </div>
    </div>
<?php $this->load->view("template/footer");?>