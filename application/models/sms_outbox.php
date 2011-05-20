<?php
class Sms_outbox extends CI_Model {
	var $id_sms = '';
	var $id_kontak = '';
	var $no_kontak = '';
	var $isi_sms = '';
	var $id_kriteria = '';
	var $waktu_masuk = '';
	
	function __construct(){
	    parent::__construct();
	}

        function all(){
            $this->db->select('*');
            $this->db->from('sms_outbox');
            $this->db->join('kriteria','kriteria.id_kriteria = sms_outbox.id_kriteria');
            $this->db->join('kontak','kontak.id_kontak = sms_outbox.id_kontak');
            $this->db->where('kriteria.status',1);
            $this->db->order_by('waktu_masuk','desc');
            $q = $this->db->get();
            return $q->result();
        }
	
	function get($id){
	    $this->db->select('*');
	    $this->db->from('sms_template');
	    $this->db->join('kriteria','kriteria.id_kriteria = sms_template.id_kriteria');
	    $this->db->where("id_template=$id");
	    $q = $this->db->get();
	    $data =  $q->result();
            $this->id_kriteria = $data[0]->id_kriteria;
            $this->pesan = $data[0]->pesan;
            return $this;
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