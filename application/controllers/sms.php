<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->lang->load('sms','indonesia');
	}
	
	/*Get URl Start */
	public function index()
	{
		$this->load->view('sms/sms');
	}
        
        public function outbox()
        {
                $this->load->view("sms/outbox");
        }

        public function inbox()
        {
                $this->load->view("sms/inbox");
        }
        
        public function inbox_delete($id)
        {
                $data = array(
                    'status_aktif' => 0,
                );
                
                $this->db->where("id_sms = $id");
                $this->db->update('sms_inbox',$data);
                redirect('sms/inbox');        
        }
        
        public function outbox_delete($id)
        {
                $data = array(
                    'status_aktif' => 0,
                );
                
                $this->db->where("id_sms = $id");
                $this->db->update('sms_outbox',$data);
                redirect('sms/outbox');        
        }
        
        public function inbox_ajax()
        {
               $this->load->view('template/ajax_inbox');
        }
        
        public function inbox_read($id_sms)
        {
                $q = $this->sms_inbox->get($id_sms);
                $data['no_kontak'] = $q->no_kontak;
                $data['isi_sms'] = $q->isi_sms;
                $data['waktu_masuk'] = $q->waktu_masuk;
                $this->load->view('template/ajax_inbox_read',$data);
        }

        public function new_sms()
        {
                $this->load->view('sms/sms_new');
        }
	
	public function template()
	{
		
		$this->load->view("sms/template");
	}
	
	public function template_add()
	{
                $this->load->view("sms/template_add");
	}

        public function template_edit()
        {
                $this->load->view("sms/template_edit");
        }
        
        public function reply($id_sms)
        {
                $q = $this->sms_inbox->get($id_sms);
                $data['no_kontak'] = $q->no_kontak;
                $data['id_sms'] = $id_sms;
                $data['id_kriteria'] = $q->id_kriteria;
                $this->load->view("sms/reply",$data);
        }
        
        public function inbox_read_criteria($id_sms)
        {
                $q = $this->sms_inbox->get($id_sms);
                $data['no_kontak'] = $q->no_kontak;
                $data['id_sms'] = $q->id_sms;
                $data['id_kriteria'] = $q->id_kriteria;
                $data['isi_sms'] = $q->isi_sms;
                $this->load->view("sms/read_criteria",$data);
        }
        
       
	/*Get URL stop*/
	
	/*POST URL Start*/
	
	public function save_sms_1()
        {
            $isi_sms = $this->input->post('isi_sms');
            $id_kontak = $this->input->post('id_kontak');
            $id_kriteria = $this->input->post('id_kriteria');
            $id_sms = $this->input->post('id_sms');
            $this->sms_kontak->save($id_kontak,$id_sms,$id_kriteria);
            $data = array(
                    'status_baca' => 1,
                    'id_kontak' => $id_kontak,
                    'id_kriteria' =>$id_kriteria
                );
                
            $this->db->where("id_sms = $id_sms");
            $this->db->update('sms_inbox',$data);
            redirect('sms/inbox'); 
            
        }
	
	 public function save_sms_2()
        {
            $nama = $this->input->post('nama');
            $no_telp = $this->input->post('no_telp');
            $isi_sms = $this->input->post('isi_sms');
            $id_kriteria = $this->input->post('id_kriteria');
            $id_sms = $this->input->post('id_sms');
            $kontak = New Kontaks;
            $kontak->nama = $nama;
            $kontak->no_telp = $no_telp;
            $kontak->save();
            $kontak->get_id();
            $id = $kontak->id_kontak;
            $this->sms_kontak->save($id,$id_sms,$id_kriteria);
            $bu = $this->db->get_where('sms_inbox',array('no_kontak'=>$no_telp));
            foreach ($bu->result() as $row){
                $sms = $row->id_sms;
                $data = array('id_kontak' => $id);
                $this->db->where("id_sms = $sms");
                $this->db->update('sms_inbox',$data);
            }
            
            $bi = $this->db->get_where('sms_outbox',array('no_kontak'=>$no_telp));
            foreach ($bu->result() as $row){
                $sms = $row->id_sms;
                $data = array('id_kontak' => $id);
                $this->db->where("id_sms = $sms");
                $this->db->update('sms_outbox',$data);
            }
            
            $data = array(
                    'status_baca' => 1,
                    'id_kontak' => $id,
                    'id_kriteria' =>$id_kriteria
                );
                
            $this->db->where("id_sms = $id_sms");
            $this->db->update('sms_inbox',$data);
            redirect('sms/inbox'); 
            
        }
        
        function reply_sms()
        {
            $id_sms = $this->input->post('id_sms');
            $no_telp = $this->input->post('no_telp');
            $pesan = $this->input->post('pesan');
            $id_kontak = 0;
            $id_kriteria = $this->input->post('id_kriteria');
            echo $this->gammu->send_one_sms($id_kontak,$no_telp,$pesan,$id_kriteria);
            $data = array(
                    'status_baca' => 1,
                );
                
            $this->db->where("id_sms = $id_sms");
            $this->db->update('sms_inbox',$data);
            redirect('sms/outbox');
        }
        
	function new_template()
	{
	    $pesan = $this->input->post('pesan');
	    $id_kriteria = $this->input->post('id_kriteria');
	    $temp = New Sms_template();
	    $temp->id_kriteria = $id_kriteria;
	    $temp->pesan = $pesan;
	    $temp->save();
	    redirect('sms/template');
	}
	
        function sms_test(){
            $no_telp = $this->input->post('no_telp');
            $pesan = $this->input->post('pesan');
            $id_kontak = $this->input->post('id_kontak');
            $id_kriteria = $this->input->post('id_kriteria');
            echo $this->gammu->send_one_sms($id_kontak,$no_telp,$pesan,$id_kriteria);
            redirect('sms/outbox');
        }
	/*POST URL Stop*/

}
