<?php
class Sms_template extends CI_Model {
	var $id_kriteria = '';
	var $pesan = '';
	var $tgl_buat = '';
	
	function __construct(){
	    parent::__construct();
	}
	
	function all(){
	    $this->db->select('*');
	    $this->db->from('sms_template');
	    $this->db->join('kriteria','kriteria.id_kriteria = sms_template.id_kriteria');
	    $this->db->where('kriteria.status',1);
	    $q = $this->db->get();
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