<?php 
include_once(APPPATH.'controllers/Padre.php');
class Main extends Padre
{
	
	public function index(){
		$this->load->view('index/index');
	}
}