<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Core extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	
	public function dashboard()
	{
		$this->load->view('dashboard');
	}

}
