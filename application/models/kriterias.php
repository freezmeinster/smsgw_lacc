<?php
    class Kriterias extends CI_Model{
	var $id_kriteria = '';
	var $kriteria = '';
	var $status = '';
	
	function __construct(){
	    parent::__construct();
	}

	function get($id){
	    $q = $this->db->get_where('kriteria',array('id_kriteria' => $id));
	    $data = $q->result();
	    $this->id_kriteria = $data[0]->id_kriteria;
	    $this->kriteria = $data[0]->nama_kriteria;
	    $this->status = $data[0]->status;
	    return $this;
	}
	
	function all(){
	    $query = $this->db->get('kriteria');
	    return $query->result();
	}
	
	function all_status($kode){
	    $query = $this->db->get_where('kriteria',array('status'=>"$kode"));
	    return $query->result();
	}
	
	function save(){
	    $data = array(
		'nama_kriteria' => $this->kriteria,
		'status' => 1
	    );
	    $this->db->insert('kriteria',$data);
	}
	
	function delete($id){
	    $this->db->delete('kriteria',array('id_kriteria' => $id));
	}
	
	function update()
	{
	    $data = array(
		'nama_kriteria' => $this->kriteria,
		'status' => $this->status
	    );
	    $this->db->where('id_kriteria',$this->id_kriteria);
	    $this->db->update('kriteria',$data);
	}
    }