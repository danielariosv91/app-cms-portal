<?php

	class Directors_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
		}


		public function add_director(){			

			$data = array(

					'd_name'  => $this->input->post('d_name'),					
				); 

			return $this->db->insert("t_directed", $data); 
		} 

		public function get_directed(){

			$query = $this->db->get('t_directed'); 
			return $query->result_array(); 
		} 
	}
?>