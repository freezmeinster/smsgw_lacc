<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->lang->load('sms');
	}

	public function index()
	{
		$this->load->view('sms/sms');
	}
	
	public function template()
	{
		
		$this->load->view("sms/template");
	}
	
	function new_template()
	{
	    $pesan = $this->input->post('pesan');
	    $id_kriteria = $this->input->post('id_kriteria');
	    $temp = New Sms_template();
	    $temp->id_kriteria = $id_kriteria;
	    $temp->pesan = $pesan;
	    $temp->save();
	    echo $pesan;
	}

}
