<?php
class Sms_inbox extends CI_Model {
	var $id_sms = '';
	var $status_baca = '';
	var $no_kontak = '';
	var $isi_sms = '';
	var $id_kriteria = '';
	var $waktu_masuk = '';
	
	function __construct(){
	    parent::__construct();
	}
	
	function get_count()
	{
            $this->db->select('*');
            $this->db->from('sms_inbox');
            $this->db->where('status_baca = 0');
            return $this->db->count_all_results();
	}

        function all(){
            $this->db->select('*');
            $this->db->from('sms_inbox');
            //$this->db->join('kriteria','kriteria.id_kriteria = sms_inbox.id_kriteria');
            $this->db->where('status_aktif = 1');
            $q = $this->db->get();
            return $q->result();
        }
	
	function get($id){
	    $this->db->select('*');
	    $this->db->from('sms_inbox');
	    //$this->db->join('kriteria','kriteria.id_kriteria = sms_template.id_kriteria');
	    $this->db->where("id_sms = $id");
	    $q = $this->db->get();
	    $data =  $q->result();
	    $this->id_kriteria = $data[0]->id_kriteria;
	    $this->id_kontak = $data[0]->id_kontak;
	    $this->id_sms = $data[0]->id_sms;
            $this->no_kontak = $data[0]->no_kontak;
            $this->isi_sms = $data[0]->isi_sms;
            $this->waktu_masuk = $data[0]->waktu_masuk;
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