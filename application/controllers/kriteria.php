<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->lang->load('criteria','indonesia');
	}
	
	/* Get URL Start */
	public function index()
	{
		$this->load->view('kriteria/kriteria');
	}
	
	public function add()
	{
	        $this->load->view('kriteria/add');
	}
	
	public function edit($id)
	{
		$data['id_kriteria'] = $id;
		$this->load->view('kriteria/edit',$data);
	}
	
	public function delete($id)
	{
	    $k = New Kriterias;
	    $k->delete($id);
	    redirect('kriteria');
	}
	/* Get URL Stop */
	
	
	
	/* POST URL Start */
	public function add_post()
	{
	    $nama_kriteria = $this->input->post('nama_kriteria');
	    $kriteria = New Kriterias;
	    $kriteria->kriteria = $nama_kriteria;
	    $kriteria->save();
	    redirect('kriteria');
	}
	
	public function edit_post($id_kriteria)
	{
	    $nama_kriteria = $this->input->post('nama_kriteria');
	    $status = $this->input->post('status');
	    $kriteria = New Kriterias;
	    $kriteria->id_kriteria = $id_kriteria;
	    $kriteria->kriteria = $nama_kriteria;
	    $kriteria->status = $status;
	    $kriteria->update();
	    redirect('kriteria');
	}
	/* POST URL Stop */
}
