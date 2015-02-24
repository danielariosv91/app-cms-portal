<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_dashboard_ci extends CI_Controller {

	public function __construct(){

		parent::__construct(); 

		$this->load->helper("url");
	}



	/* ==========================================
	    Dashboard Admin Page for this controller.
	   ==========================================
	 */

	public function dashboard(){

		$this->load->view('administrador/templates/header');
		$this->load->view('administrador/templates/nav');
		$this->load->view('administrador/views/dashboard_view');
		$this->load->view('administrador/templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */