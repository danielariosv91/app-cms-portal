<?php

	class Movie_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
		}


		public function add_movie(){
			

			$data = array(

					'm_name'  => $this->input->post('m_name'),					
					
				); 

			return $this->db->insert("t_movies", $data); 
		}

		/* public function get_people(){

			$query = $this->db->get('t_people'); 
			return $query->result_array(); 
		} */
	}
?>