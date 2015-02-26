<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Directed_controller extends CI_Controller {



	public function __construct(){

		parent::__construct(); 

		$this->load->helper('url');
		$this->load->model("directors_model");
	} 

	/* =======================================
	    All Directed Page for this controller.
	   =======================================
	 */


	public function directed(){

		$data['title'] = "Directores";
		$data['directors'] = $this->directors_model->get_directed();  

		$this->load->view("portal/templates/header", $data);
		$this->load->view("portal/templates/nav");
		$this->load->view("portal/views/all_directed_view", $data); 

	}

	public function single_directed_view($url){
		
		$data['directed'] = $this->directors_model->get_directed_by_url($url);
		$data['title'] = $data['directed']['d_name']; 


		$this->load->view('portal/templates/header', $data); 
		$this->load->view('portal/templates/nav'); 
		$this->load->view('portal/views/single_directed_page', $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */