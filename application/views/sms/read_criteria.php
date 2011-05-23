<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
        <h2><?php get_line('sms_save');?></h2>
    </div>
    <div class="contentbox">
      <?php 
          $ada = $this->kontaks->check($no_kontak);
          if ($ada == 0 ){
              $pesan = get_line_item('sms_no_contact');
              put_warning($pesan);
              $url = "sms/save_sms_2";
              $kontak = $no_kontak;
              $id_kontak = 0;
              $name_box = "<tr><td>Nama Pengirim</td><td>:</td><td><input type=\"text\" name=\"nama\" class=\"inputbox\"/></td></tr>";
              $lang = "sms_sender_number";
          }else{ 
              $url = "sms/save_sms_1";
              $id_kontak = $this->kontaks->check($no_kontak);
              $k = $this->kontaks->get($id_kontak);
              $kontak = "<a href=\"\">$k->nama</a>";
              $name_box = '';
              $lang = "sms_sender";
          }
          ?>
        <form method="POST" action="<?php echo site_url($url);?>">
           <input type="hidden" name="id_kontak" value="<?php echo $id_kontak; ?>"/>
           <input type="hidden" name="no_telp" value="<?php echo $no_kontak; ?>"/>
           <input type="hidden" name="isi_sms" value="<?php echo $isi_sms; ?>"/>
           <input type="hidden" name="id_sms" value="<?php echo $id_sms; ?>"/>
            <table>
                <?php echo $name_box ;?>
                <tr><td><?php get_line($lang);?></td><td>:</td><td><?php echo $kontak; ?></td></tr>
                <tr>
                    <td>
                        <?php get_line('sms_content');?>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                         <?php echo $isi_sms;?>
                    </td>
                </tr>
                <tr>
                    <td><?php get_line('sms_criteria');?></td><td>:</td>
                    <td>
                        <select name="id_kriteria">
                        <?php
                            $kriteria = $this->kriterias->all_status(1);
                            foreach($kriteria as $row){
                                $value = $row->nama_kriteria;
                                $id = $row->id_kriteria;
                                if ($id == $id_kriteria ){
                                    $select = 'selected';
                                }else $select = '';
                                echo "<option $select value=\"$id\">$value</option>\n";
                            };
                        ?>
                        </select>
                    </td>
                </tr>
                
                <tr><td colspan="3"><input type="submit" value="<?php get_line('save');?>" class="btn" /></td></tr>
           </table>
        </form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>