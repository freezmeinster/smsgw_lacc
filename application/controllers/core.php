<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Core extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		redirect('sms/inbox');
	}
	
	public function dashboard()
	{
		$this->load->view('core/dashboard');
	}
	
	public function get_notif_count()
	{
                echo $this->sms_inbox->get_count();
	}

}
