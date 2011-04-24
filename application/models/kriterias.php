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
	    print_r($data);
	    $this->id_kriteria = $data->id_kriteria;
	    $this->kriteria = $data->nama_kriteria;
	    $this->status = $data->status;
	}
	
	function all(){
	    $query = $this->db->get('kriteria');
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
    }