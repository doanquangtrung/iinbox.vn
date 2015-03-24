<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function index()
	{
	   
       $this->load->library('mongo_db');
       
       $user = $this->mongo_db->select()->get('users');

       
       $this->load->view('header');
	   $this->load->view('index');
       $this->load->view('footer');
	}
}