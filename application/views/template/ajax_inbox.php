<table width="100%">
            <thead>
                <tr>
                    <th><?php get_line('sms_sender');?></th>
                    <th><?php get_line('sms_content');?></th>
                    <th><?php get_line('sms_status_read');?></th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                                <?php
                                    $q = $this->sms_inbox->all();
                                    $i = 1;
                                    $edit_label = get_line_item('read');
                                    $delete_label = get_line_item('delete');
                                    $base = base_url();
                                    
                                    foreach($q as $row ){
                                    $id_sms = $row->id_sms;
                                    $id_kontak = $row->id_kontak;
                                    $no_kontak = $row->no_kontak;
                                    $isi_sms = $row->isi_sms;
                                    $status = $row->status_baca;
                                    $history_url = site_url("kontak/history/$id_kontak");
                                    $reply_url = site_url("sms/reply/$id_sms");
                                    
                                    $delete_url = site_url("sms/inbox_delete/$id_sms");
                                    $read_url = site_url("sms/inbox_read_criteria/$id_sms");
                                    $click_message = site_url("sms/inbox_read/$id_sms");
                                    
                                    if ($id_kontak != ''){
                                        $k = $this->kontaks->get($id_kontak);
                                        $kontak = "<a href=\"$history_url\">$k->nama</a>";
                                    }else {
                                        $kontak = $no_kontak;
                                    }
                                    
                                    if ($status == 0 ){
                                        $status_baca = "<span class=\"usagetxt greentxt\">Balum Dibaca</span>";
                                    }else {
                                        $status_baca = "<span class=\"usagetxt redtxt\">Sudah Dibaca</span>";
                                    }
                                    
                                    if (bcmod($i,'2') == 0){
                                        $r = 'class="alt"';
                                    }else $r = '';
                                    
                                    echo "<tr $r>\n";
                                    echo "<td>$kontak</td>\n";
                                    echo "<td>$isi_sms</td>\n";
                                    echo "<td>$status_baca</td>\n";
                                    echo "<td class='option-width'>\n";
                                    echo "<a href='$reply_url' title=\"Balas\"><img alt=\"View\" src=\"$base/asset/img/icons/icon_info.png\"></a>\n";
                                    echo "<a href='$read_url' title=\"$edit_label\" ><img alt=\"Baca\" src=\"$base/asset/img/icons/icon_edit.png\"></a>\n";
                                    echo "<a href='$delete_url' title=\"$delete_label\"><img alt=\"Delete\" src=\"$base/asset/img/icons/icon_delete.png\"></a>\n";
                                    echo "</td>\n";
                                    echo "</tr>\n";
                                    $i++;
                                    }
                                ?>
 </tbody>
        </table>