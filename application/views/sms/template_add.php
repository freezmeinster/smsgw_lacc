<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
        <h2><?php get_line('sms_template_add');?></h2>
    </div>
    <div class="contentbox">
        <form method="POST" action="<?php echo site_url('sms/new_template');?>">
            <table>
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
                                echo "<option value=\"$id\">$value</option>";
                            };
                        ?>
                        </select>
                    </td>
                </tr>
                <tr><td colspan="3"><input type="submit" value="Tambahkan" class="btn" /></td></tr>
           </table>
        </form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>