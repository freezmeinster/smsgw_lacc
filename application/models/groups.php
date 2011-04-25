<?php 
    class Groups extends CI_Model {
	var $id_group = '';
	var $nama_group = '';
	var $keterangan = '';
	
	function all()
	{
		$q = $this->db->get('group');
		return $q->result();
	}
	
	function save()
	{
	    $data = array(
		'nama_group' => $this->nama_group,
		'keterangan' => $this->keterangan
	    );
	    $this->db->insert('group',$data);
	}
	
	function delete($id)
	{
	    $this->db->delete('group',array('id_group' => $id));
	}
    }
?>