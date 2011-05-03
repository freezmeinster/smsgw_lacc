<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('group','indonesia');
	}

	public function index()
	{
		$this->load->view('group/group');
	}
	
	public function add()
	{
		$this->load->view('group/add');
	}
	
	public function delete($id)
	{
		$this->groups->delete($id);
		redirect('group');
	}
	
	public function group_add_post()
	{
		$nama_group = $this->input->post('nama_group');
		$keterangan = $this->input->post('keterangan');
		$group = New Groups;
		$group->nama_group = $nama_group;
		$group->keterangan = $keterangan;
		$group->save();
		redirect('group');
	}
}
