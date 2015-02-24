<?php

	class Movie_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
		}


		public function add_movie(){
			

			$data = array(

					'm_name'     => $this->input->post('m_name'),	
					'm_directed' => $this->input->post('m_director'),
					'm_year'     => $this->input->post('m_year'),
					'm_music'    => $this->input->post('m_music'),
					'm_category' => $this->input->post('m_category'), 				
					
				); 

			return $this->db->insert("t_movies", $data); 
		}

		/* public function get_people(){

			$query = $this->db->get('t_people'); 
			return $query->result_array(); 
		} */
	}
?>