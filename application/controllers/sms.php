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
        
        public function inbox_read_one($id)
        {
                $data = array(
                    'status_baca' => 1,
                );
                
                $this->db->where("id_sms = $id");
                $this->db->update('sms_inbox',$data);
                redirect('sms/inbox');        
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
	/*Get URL stop*/
	
	/*POST URL Start*/
	
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
            redirect('sms/new_sms');
        }
	/*POST URL Stop*/

}
