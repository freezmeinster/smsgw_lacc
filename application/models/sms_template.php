<?php
class Sms_template extends CI_Model {
	var $id_kriteria = '';
	var $pesan = '';
	var $tgl_buat = '';
	
	function __construct(){
	    parent::__construct();
	}
	
	function all(){
	    $q = $this->db->get('sms_template');
	    return $q->result();
	}
	
	function save(){
	    $data = array(
		'id_kriteria' => $this->id_kriteria,
		'pesan' => $this->pesan
	    );
	    
	    $this->db->insert('sms_template',$data);
	}
}
?>