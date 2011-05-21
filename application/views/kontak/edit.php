<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('contact_edit'); echo " $nama"; ?></h2>
    </div>
    <div class="contentbox">
	<form method="POST" action="<?php echo site_url("kontak/kontak_update/$id_kontak");?>">
	    <table>
		<tr><td>Nama</td><td>:</td><td><input type="text"  class="inputbox" name="nama" value="<?php echo $nama; ?>"/> </td></tr>
		<tr><td>No Telp</td><td>:</td><td><input type="text"  class="inputbox" name="no_telp" value="<?php echo $no_telp; ?>"/> </td></tr>
		<tr><td>Alamat</td><td>:</td><td><textarea name="alamat" class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"><?php echo $alamat;?></textarea></td></tr>
		<tr><td colspan="3"><input type="submit" value="<?php get_line('edit');?>" class="btn" /></td></tr>
	   </table>
	</form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>