<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->lang->load('criteria');
	}
	
	/* Get URL Start */
	public function index()
	{
		$this->load->view('kriteria/kriteria');
	}
	
	public function add()
	{
	    $this->load->view('kriteria/kriteria');
	}
	/* Get URL Stop */
	
	/* POST URL Start */
	
	/* POST URL Stop */
}
