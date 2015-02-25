<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {



	public function __construct(){

		parent::__construct(); 

		$this->load->helper('url');

		$this->load->model(array('movie_model', 'slider_model'));
	} 

	/* =================================
	    Index Page for this controller.
	   =================================
	 */


	public function index(){

		$data['movies']  = $this->movie_model->get_all_movies(); 
		$data['sliders'] = $this->slider_model->get_all_slider_selected();
		$data['title']   = "Movies"; 

		$this->load->view('portal/templates/header',$data); 
		$this->load->view('portal/templates/nav'); 
		$this->load->view('portal/views/home', $data);
	}

	public function movie_view($url){

		$data['movie'] = $this->movie_model->get_movie_by_url($url);
		$data['title'] = $data['movie']['m_name']; 


		$this->load->view('portal/templates/header', $data); 
		$this->load->view('portal/templates/nav'); 
		$this->load->view('portal/views/movie_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */