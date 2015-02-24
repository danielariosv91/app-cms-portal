<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {



	public function __construct(){

		parent::__construct(); 

		$this->load->helper('url');
	} 

	/* =================================
	    Index Page for this controller.
	   =================================
	 */


	public function index(){

		$this->load->view('portal/templates/header'); 
		$this->load->view('portal/templates/nav'); 
		$this->load->view('portal/views/home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */