<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_movie_ci extends CI_Controller {

	public function __construct(){

		parent::__construct(); 

		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation'); 
		
		$this->load->model('movie_model'); 
		$this->load->model('directors_model'); 
		$this->load->model('categories_model'); 
	}



	/* ==========================================
	    Dashboard Admin Page for this controller.
	   ==========================================
	 */

	public function movies(){

		$data['directors'] = $this->directors_model->get_directed(); 
		$data['categories'] = $this->categories_model->get_categories(); 

		$this->load->view('administrador/templates/header');
		$this->load->view('administrador/templates/nav');
		$this->load->view('administrador/views/movies_view', $data);
		$this->load->view('administrador/templates/footer');
	}



	/* ===============================================================
	    Action: Add Movie, agrega a una pelicula a la tabla t_movies.  
	   ===============================================================
	 */

	public function add_movie(){

		$this->form_validation->set_rules('m_name', 'MovieName');
		$this->form_validation->set_rules('m_director', 'MovieDirector');

		if ($this->form_validation->run() == false){
			
			//handle error
		
		} else {

			$this->movie_model->add_movie(); 			
			redirect('admin/movies'); 
		}
	}
}