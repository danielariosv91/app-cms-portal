<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {



	public function __construct(){

		parent::__construct(); 

		$this->load->helper('url');

		$this->load->model('movie_model');
	} 

	/* =================================
	    Index Page for this controller.
	   =================================
	 */


	public function index(){

		$data['movies'] = $this->movie_model->get_all_movies(); 

		$this->load->view('portal/templates/header'); 
		$this->load->view('portal/templates/nav'); 
		$this->load->view('portal/views/home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */