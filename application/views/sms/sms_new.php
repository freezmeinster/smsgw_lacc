<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
        <h2><?php get_line('sms_new');?></h2>
    </div>
    <div class="contentbox">
    
    <script>
        $(function() {
                function log( message ) {
                        $("#no_1").val(message);
                        $("#no_2").val(message);
                }
                
                function loging( message ) {
                        $("#kontak").val(message);
                }

                $( "#receiver" ).autocomplete({
                        source: "<?php echo site_url('kontak/search');?>",
                        minLength: 2,
                        select: function( event, ui ) {
                                log( ui.item ?
                                        ui.item.id :
                                        "Nothing selected, input was " + this.value );
                                loging( ui.item ?
                                        ui.item.kontak :
                                        "Nothing selected, input was " + this.value );
                        }
                });
        });
        </script>
    
        <form method="POST" action="<?php echo site_url('sms/sms_test');?>">
            <table>
                <tr><td><?php get_line('sms_receiver');?></td><td>:</td><td><input type="text" id="receiver"  class='inputbox' name="sms_receiver"/></td></tr>
                <tr><td><?php get_line('sms_phone');?></td><td>:</td><td><input type="text" class="inputbox" name="no_telp" id="no_2"/></td></tr>
                <input type="hidden" name="id_kontak" id="kontak"/>
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