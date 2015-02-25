<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_slider_ci extends CI_Controller {



	public function __construct(){

		parent::__construct(); 

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('slider_model'); 
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

	public function upload_photo_slider(){
		
		$this->form_validation->set_rules('file', 'HiddenFile');


		if ($this->form_validation->run() == false){
			
			//handle error

		
		} else {

			$this->slider_model->add_photo_slider(); 			
			redirect('admin/slider'); 
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */