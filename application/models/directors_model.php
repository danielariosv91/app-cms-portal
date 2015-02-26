<?php

	class Directors_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
		}


		public function add_director(){	


		
			$d_name = $_POST['d_name']; 
			$d_description = $_POST['d_description']; 		
			$d_url    = url_title($d_name, 'dash', true);

			$data = array(

					'd_name'        => $d_name,
					'd_description' => $d_description, 
					'd_url'         => $d_url,					
				); 

			return $this->db->insert("t_directed", $data); 
		} 

		public function get_directed(){

			$query = $this->db->get('t_directed'); 
			return $query->result_array(); 
		} 
	}
?>