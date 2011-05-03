<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('group_add');?></h2>
    </div>
    <div class="contentbox">
	<form method="POST" action="<?php echo site_url('group/group_new');?>">
	    <table>
		<tr><td><?php get_line('group_name');?></td><td>:</td><td><input type="text"  class="inputbox" name="nama"/></td></tr>
		<tr><td><?php get_line('group_desc');?></td><td>:</td><td><textarea name="alamat" class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"></textarea></td></tr>
		<tr><td colspan="3"><input type="submit" value="Tambahkan" class="btn" /></td></tr>
	   </table>
	</form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>