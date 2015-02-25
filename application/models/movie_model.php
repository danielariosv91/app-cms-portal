<?php

	class Movie_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
		}


		public function add_movie(){
			
			$url = url_title($this->input->post('m_name'), 'dash', true);

			$data = array(

					'm_name'     => $this->input->post('m_name'),	
					'm_directed' => $this->input->post('m_director'),
					'm_year'     => $this->input->post('m_year'),
					'm_music'    => $this->input->post('m_music'),
					'm_category' => $this->input->post('m_category'),
					'm_article'  => $this->input->post('m_article'),
					'm_url'      => $url, 				
					
				); 

			return $this->db->insert("t_movies", $data); 
		}

		public function get_all_movies(){

			$query = $this->db->get('t_movies'); 
			return $query->result_array(); 
		} 

		public function get_movie_by_url($url){

			$query = $this->db->get_where('t_movies', array('m_url' => $url));
			return $query->row_array();	
		}
	}
?>