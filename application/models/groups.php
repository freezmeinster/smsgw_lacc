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
	
	function get($id){
	    $q = $this->db->get_where('group',array('id_group' => $id));
	    $data = $q->result();
	    $this->id_group = $data[0]->id_group;
	    $this->nama_group = $data[0]->nama_group;
	    $this->keterangan = $data[0]->keterangan;
	    return $this;
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
	
	function update()
	{
	    $data = array(
		'nama_group' => $this->nama_group,
		'keterangan' => $this->keterangan
	    );
	    $this->db->where('id_group',$this->id_group);
	    $this->db->update('group',$data);
	}
    }
?>