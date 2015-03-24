<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
	   
       $this->load->library('mongo_db');              

	   $this->load->view('index');
       
	}
}