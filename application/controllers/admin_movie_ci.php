<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_movie_ci extends CI_Controller {

	public function __construct(){

		parent::__construct(); 

		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation'); 
		$this->load->model('movie_model'); 
	}



	/* ==========================================
	    Dashboard Admin Page for this controller.
	   ==========================================
	 */

	public function movies(){

		$this->load->view('administrador/templates/header');
		$this->load->view('administrador/templates/nav');
		$this->load->view('administrador/views/movies_view');
		$this->load->view('administrador/templates/footer');
	}



	/* ===============================================================
	    Action: Add Movie, agrega a una pelicula a la tabla t_movies.  
	   ===============================================================
	 */

	public function add_movie(){

		$this->form_validation->set_rules('m_name', 'MovieName');

		if ($this->form_validation->run() == false){
			
			//handle error
		
		} else {

			$this->movie_model->add_movie(); 			
			redirect('admin/movies'); 
		}
	}
}