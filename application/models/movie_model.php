<?php

	class Movie_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
			$this->load->helper('form');
		}


		public function add_movie(){			

			$url = url_title($this->input->post('m_name'), 'dash', true);

			$data = array(

					'm_name'     	 => $this->input->post('m_name'),	
					'm_directed' 	 => $this->input->post('m_director'),
					'm_year'     	 => $this->input->post('m_year'),
					'm_music'    	 => $this->input->post('m_music'),
					'm_category' 	 => $this->input->post('m_category'),
					'm_article'  	 => $this->input->post('m_article'),
					'm_quotes'       => $this->input->post('m_quotes'),					
					'm_url'      	 => $url,
					'm_active_item'  => 0,				
					
				); 

			return $this->db->insert("t_movies", $data); 
		}

		public function update_movie($id){



			$config['upload_path'] = './images/'; 
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = $_FILES['file']['name'];

			$this->load->library('upload', $config);

			$file = $this->upload->data();
			$name = $file['file_name']; 

			/* subir imagen al servidor*/
			$this->upload->do_upload('file'); 

			$data = array(


					'm_name'     	 => $this->input->post('m_name'),		
					'm_images'       => $name,
				);

			$this->db->where('m_index', $id);
			$this->db->update('t_movies', $data);
		}

		public function delete_movie($id){

			return $this->db->delete('t_movies', array('m_index' => $id)); 
		}

		public function get_all_movies(){

			$query = $this->db->get('t_movies'); 
			return $query->result_array(); 
		} 

		public function get_movie_by_id($id){

			$query = $this->db->get_where('t_movies', array('m_index' => $id)); 
			return $query->row_array(); 

		}

		public function get_movie_by_url($url){

			$query = $this->db->get_where('t_movies', array('m_url' => $url));
			return $query->row_array();	
		}
	}
?>