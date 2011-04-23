<?php
    class Kriterias extends CI_Model{
	var $kriteria = '';
	var $status = '';
	
	function __construct(){
	    parent::__construct();
	}

	
	function all(){
	    $query = $this->db->get('kriteria');
	    return $query->result();
	}
	
	function save(){
	    $data = array(
		'kriteria' => $this->kriteria,
		'status' => 1
	    );
	    $this->db->insert('kriteria',$data);
	}
    }