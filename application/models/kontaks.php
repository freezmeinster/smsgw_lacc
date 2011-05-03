<?php
    class Kontaks extends CI_Model {
	var $id_kontak = '';
	var $nama = '';
	var $alamat = '';
	var $no_telp = '';
	
	function all(){
	    $q = $this->db->get('kontak');
	    return $q->result();
	}
	
	function save(){
	    $data = array(
		'nama' => $this->nama,
		'no_telp' => $this->no_telp,
		'alamat' => $this->alamat
	    );
	    $this->db->insert('kontak',$data);
	    
	}
    }
?>