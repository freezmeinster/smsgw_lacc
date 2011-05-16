<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('criteria_add');?></h2>
    </div>
    <div class="contentbox">
	<form method="POST" action="<?php echo site_url("kriteria/edit_post/$id_kriteria");?>">
	    <table>
		<?php
		    $kriteria = $this->kriterias->get($id_kriteria);
		?>
		<tr>
			<td><?php get_line('criteria_name');?></td>
			<td><input class="inputbox" type="text" name="nama_kriteria" value="<?php echo $kriteria->kriteria; ?>"/></td>
		</tr>
		
		<tr>
			<td><?php get_line('criteria_status');?></td>
			<td>
			    <select name="status">
				<option value="1" <?php if($kriteria->status == 1 ){ echo "selected";}?> >Aktif</option>
				<option value="0" <?php if($kriteria->status == 0 ){ echo "selected";}?> >Tidak Aktif</option>
			    </select>
			</td>
		</tr>

		<tr>
		<td valign="top">
			<input type="submit" value="Perbaharui" class="btn" />
		</td>
		<td></td>
	</tr>
		   </table>
	</form>
    </div>
    <div style="clear: both;"></div>
    </div>
<?php $this->load->view("template/footer");?>