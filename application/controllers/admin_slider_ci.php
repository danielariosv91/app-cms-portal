<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_slider_ci extends CI_Controller {



	public function __construct(){

		parent::__construct(); 

		$this->load->helper('url');
	} 

	/* =================================
	    Index Page for this controller.
	   =================================
	 */


	public function slider(){
		
		$this->load->view('administrador/templates/header'); 
		$this->load->view('administrador/templates/nav'); 
		$this->load->view('administrador/views/slider_view');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */