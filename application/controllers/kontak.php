<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('contact','indonesia');
	}
	
	/*Get URL start*/
	public function index()
	{
		$this->load->view('kontak/kontak');
	}
	
	public function add()
	{
		$this->load->view('kontak/add');
	}
	/*Get URL stop*/
	
	/*POST URL Start*/
	public function kontak_new()
	{
		$k = New Kontaks;
		$k->nama = $this->input->post('nama');
		$k->no_telp = $this->input->post('no_telp');
		$k->save();
		redirect('kontak');
	}
	/*POST URL Stop*/
	
}
