<?php 
include_once(APPPATH.'controllers/Padre.php');
class Welcome extends Padre {
	public function index()
	{
		$this->load->view('index/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */