<?php

	class Slider_model extends CI_Model{

		public function __construct(){

			$this->load->database(); 
			$this->load->helper('form');
		}


		public function add_photo_slider(){



			$config['upload_path'] = './images/slider'; 
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = $_FILES['file']['name'];

			$this->load->library('upload', $config);

			$file = $this->upload->data();
			$name = $file['file_name']; 

			/* subir imagen al servidor*/
			$this->upload->do_upload('file'); 

			
			$data = array(

					's_name'       => $name,									
					
				); 

			return $this->db->insert("t_slider", $data); 
		}

		public function get_all_slider_selected(){

			$query = $this->db->get('t_slider');
			return $query->result_array(); 
		}
	
	}
?>