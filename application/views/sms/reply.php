<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
        <h2><?php get_line('sms_reply');?></h2>
    </div>
    <div class="contentbox">
       <?php 
          $ada = $this->kontaks->check($no_kontak);
          if ($ada == 0 ){
              $url = "sms/reply_sms_2";
              $kontak = $no_kontak;
              $id_kontak = 0;
              $name_box = "<tr><td>Nama Pengirim</td><td>:</td><td><input type=\"text\" name=\"nama\" class=\"inputbox\"/></td></tr>";
              $lang = "sms_phone_number";
          }else{ 
              $id_kontak = $this->kontaks->check($no_kontak);
              $k = $this->kontaks->get($id_kontak);
              $kontak = "<a href=\"\">$k->nama</a>";
              $name_box = '';
              $lang = "sms_phone";
          }
          ?>
        <form method="POST" action="<?php echo site_url('sms/reply_sms');?>">
            <input type="hidden" name="no_telp" value="<?php echo $no_kontak;?>"/>
            <input type="hidden" name="id_sms" value="<?php echo $id_sms;?>"/>
            <table>
                <tr><td><?php get_line($lang);?></td><td>:</td><td><?php echo $kontak; ?></td></tr>
                <tr>
                    <td>
                        <?php get_line('sms_content');?>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <textarea name="pesan" class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"></textarea>
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
                
                <tr><td colspan="3"><input type="submit" value="<?php get_line('send');?>" class="btn" /></td></tr>
           </table>
        </form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>