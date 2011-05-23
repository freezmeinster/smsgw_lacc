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
	
	function search_number($no){
            $this->db->select('*');
            $this->db->from('kontak');
            $this->db->not_like('status_aktif',0);
            $this->db->like('no_telp',$no);
            $q = $this->db->get();
            return $q->result();
        
        }
	
	function get($id_kontak)
	{
            $q = $this->db->get_where('kontak',array('id_kontak' => $id_kontak));
            $data = $q->result();
            $this->nama = $data[0]->nama;
            $this->alamat = $data[0]->alamat;
            $this->no_telp = $data[0]->no_telp;
            return $this;
	
	}
	
        function check($no_telp)
        {
            $q = $this->db->get_where('kontak',array('no_telp' => $no_telp));
            if ($q->num_rows() > 0 ){
                $data = $q->result();
                return $data[0]->id_kontak;
            }else return 0;
        }
        
	function save(){
	    $data = array(
		'nama' => $this->nama,
		'no_telp' => $this->no_telp,
		'alamat' => $this->alamat
	    );
	    $this->db->insert('kontak',$data);
	    
	}
	
	function get_id()
	{
            $no_telp = $this->no_telp;
            $q = $this->db->get_where('kontak',array('no_telp' => $no_telp));
            $data = $q->result();
            $this->id_kontak = $data[0]->id_kontak;
            return $this;
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
        
        function get_note($id_kontak)
        {
           $q = $this->db->get_where('note_kontak',array('id_kontak' => $id_kontak));
            if ($q->num_rows() > 0 )
            {
                $data = $q->row();
                return $data->isi_note;
             }
        }
        
        function note_add($id_kontak,$note)
        {
            $q = $this->db->get_where('note_kontak',array('id_kontak' => $id_kontak));
            if ($q->num_rows() > 0 )
            {
              $notes = $q->row();
              $id = $notes->id_note;
              $data = array('isi_note' => $note );
              $this->db->where('id_note',$id);
              $this->db->update('note_kontak',$data); 
               
            }else if ($q->num_rows() == 0 ) {
                $data = array(
                    'id_kontak' => $id_kontak,
                    'isi_note' => $note
                );
                $this->db->insert('note_kontak',$data);
            }
        }

    }
?>