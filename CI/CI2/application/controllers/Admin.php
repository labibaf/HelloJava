<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['konten']="home";
		$this->load->view('template',$data);		
	}

	public function profil()
	{
		$data['konten']="profil";
		$this->load->view('template',$data);
	}



}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */