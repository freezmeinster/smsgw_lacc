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
	
	public function inactive()
        {
                $this->load->view('kontak/kontak_inactive');
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
	
	public function edit($id_kontak)
	{
                $kontak = $this->kontaks->get($id_kontak);
                $data['id_kontak'] = $id_kontak;
                $data['nama'] = $kontak->nama ;
                $data['no_telp'] = $kontak->no_telp ;
                $data['alamat'] = $kontak->alamat;
                $this->load->view('kontak/edit',$data);
	}
	
	public function delete($id_kontak)
	{
                $this->kontaks->delete($id_kontak);
                redirect('kontak');
	}
	
	public function activated($id_kontak)
        {
                $this->kontaks->active($id_kontak);
                redirect('kontak');
        }
	
	public function inactivated($id_kontak)
        {
                $this->kontaks->inactive($id_kontak);
                redirect('kontak');
        }
	
	public function add()
	{
		$this->load->view('kontak/add');
		redirect('kontak');
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
	
	public function kontak_update($id_kontak)
	{
                $k = New Kontaks;
                $k->id_kontak = $id_kontak;
                $k->nama = $this->input->post('nama');
                $k->no_telp = $this->input->post('no_telp');
                $k->alamat = $this->input->post('alamat');
                $k->update();
                redirect('kontak');
	}
	/*POST URL Stop*/
	
}
