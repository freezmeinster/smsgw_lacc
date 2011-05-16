<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('criteria_add');?></h2>
    </div>
    <div class="contentbox">
	<form method="POST" action="<?php echo site_url('kriteria/add_post');?>">
	    <table>
		<tr><td><?php get_line('criteria_name');?></td><td>:</td><td><input type="text"  class="inputbox" name="nama_kriteria"/> </td></tr>
		<tr><td colspan="3"><input type="submit" value="Tambahkan" class="btn" /></td></tr>
	   </table>
	</form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>