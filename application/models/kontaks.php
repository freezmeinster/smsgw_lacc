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
	
	function search_name($name){
            $this->db->select('*');
            $this->db->from('kontak');
            $this->db->like('nama',$name);
            $q = $this->db->get();
            return $q->result();
	
	}
	
	function get($id_kontak)
	{
            $q = $this->db->get_where('kontak',array('id_kontak' => $id_kontak));
            $data = $q->result();
            $this->id_kontak = $data[0]->id_kontak;
            $this->nama = $data[0]->nama;
            $this->alamat = $data[0]->alamat;
            $this->no_telp = $data[0]->no_telp;
            return $this;
	
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