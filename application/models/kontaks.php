<?php
    class Kontaks extends CI_Model {
	var $id_kontak = '';
	var $nama = '';
	var $alamat = '';
	var $no_telp = '';
	
	function all($active=1){
            $this->db->where('status_aktif',$active);
	    $q = $this->db->get('kontak');
	    return $q->result();
	}
	
	function search_name($name){
            $this->db->select('*');
            $this->db->from('kontak');
            $this->db->not_like('status_aktif',0);
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
	
	function update()
	{
            $data = array(
                'nama' => $this->nama,
                'no_telp' => $this->no_telp,
                'alamat' => $this->alamat
            );
            $this->db->where('id_kontak',$this->id_kontak);
            $this->db->update('kontak',$data);
	}
	
	function delete($id_kontak)
	{
            $this->db->delete('kontak',array('id_kontak' => $id_kontak));
	}

        function active($id_kontak)
        {
            $data = array(
                'status_aktif' => 1
            );
            $this->db->where('id_kontak',$id_kontak);
            $this->db->update('kontak',$data);
        }
        
        function inactive($id_kontak)
        {
            $data = array(
                'status_aktif' => 0
            );
            $this->db->where('id_kontak',$id_kontak);
            $this->db->update('kontak',$data);
        }

    }
?>