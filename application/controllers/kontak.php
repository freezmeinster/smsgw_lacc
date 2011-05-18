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
	
	public function search()
	{
                $name = $this->input->get('term');
                $item = $this->kontaks->search_name($name);
                echo "[";
                foreach($item as $row){
                    $id = $row->nama;
                    $value = $row->no_telp;
                    $kontak = $row->id_kontak;
                    echo "{ \"id\" : \"$value\" , \"value\" : \"$id\" , \"kontak\" : \"$kontak\"},";
                }
                echo "{\"\":\"\"}]";
	
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
		$k->alamat = $this->input->post('alamat');
		$k->save();
		redirect('kontak');
	}
	/*POST URL Stop*/
	
}
