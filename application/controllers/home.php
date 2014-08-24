<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('tsoms.html');
	}
	public function cdpo(){
		$this->load->view('cdpo.html');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */