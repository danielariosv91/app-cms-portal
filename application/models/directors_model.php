<?php

	class Directors_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
		}


		/* public function add_movie(){
			

			$data = array(

					'm_name'  => $this->input->post('m_name'),					
					
				); 

			return $this->db->insert("t_movies", $data); 
		} */

		public function get_directed(){

			$query = $this->db->get('t_directed'); 
			return $query->result_array(); 
		} 
	}
?>