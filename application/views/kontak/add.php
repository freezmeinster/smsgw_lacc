<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('contact_add');?></h2>
    </div>
    <div class="contentbox">
	<form method="POST" action="<?php echo site_url('kontak/kontak_new');?>">
	    <table>
		<tr><td>Nama</td><td>:</td><td><input type="text"  class="inputbox" name="nama"/> </td></tr>
		<tr><td>No Telp</td><td>:</td><td><input type="text"  class="inputbox" name="no_telp"/> </td></tr>
		<tr><td>Alamat</td><td>:</td><td><textarea name="alamat" class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"></textarea></td></tr>
		<tr><td colspan="3"><input type="submit" value="Tambahkan" class="btn" /></td></tr>
	   </table>
	</form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>