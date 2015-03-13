<?php 
include_once(APPPATH.'controllers/padre.php');
class Welcome extends padre {
	public function index()
	{
		$this->load->view('index/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */