<?php

class Movies extends CI_Model
{

    public function show()
    {
        return $this->db->get('t_movies')->result_object();
    }

    public function store()
    {
        $create = new stdClass();
        $create->name = $this->input->post('name');
        $create->directed = $this->input->post('directed_id');
        $create->year = $this->input->post('year_id');
        $create->category = $this->input->post('category_id');
        $create->quotes = $this->input->post('quotes_id');
        $create->url = url_title($this->input->post('m_name'), 'dash', true);
        $create->active = 0;

        if ($this->db->insert("movies", $create)) {
            return $this->output
                ->set_content_type('application/json')
                ->set_content_type(200)
                ->set_output(json_encode(array('text' => 'OK')));
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_content_type(400)
                ->set_output(json_encode(array('text' => 'Bad Request')));
        }
    }

    public function delete($id)
    {
        return $this->db->delete('movies', array('id' => $id));
    }


    public function update_movie($id)
    {
        $url = url_title($this->input->post('m_name'), 'dash', true);

        $data = array(


            'm_name' => $this->input->post('m_name'),
            'm_directed' => $this->input->post('m_director'),
            'm_year' => $this->input->post('m_year'),
            'm_music' => $this->input->post('m_music'),
            'm_category' => $this->input->post('m_category'),
            'm_article' => $this->input->post('m_article'),
            'm_quotes' => $this->input->post('m_quotes'),
            'm_url' => $url,
        );

        $this->db->where('m_index', $id);
        $this->db->update('t_movies', $data);
    }

    public function edit_photo_movie($id)
    {

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $_FILES['file']['name'];

        $this->load->library('upload', $config);

        $file = $this->upload->data();
        $name = $file['file_name'];

        /* subir imagen al servidor*/
        $this->upload->do_upload('file');

        $data = array(

            'm_images' => $name,
        );

        $this->db->where('m_index', $id);
        $this->db->update('t_movies', $data);
    }


    public function active_item($id)
    {

        $data = array(

            'm_active_item' => 1,
        );

        $this->db->where('m_index', $id);
        $this->db->update('t_movies', $data);
    }

    public function get_all_movies()
    {

        $query = $this->db->get('t_movies');
        return $query->result_array();
    }

    public function get_movie_by_id($id)
    {

        $query = $this->db->get_where('t_movies', array('m_index' => $id));
        return $query->row_array();

    }

    public function get_movie_by_url($url)
    {

        $query = $this->db->get_where('t_movies', array('m_url' => $url));
        return $query->row_array();
    }
}

?>