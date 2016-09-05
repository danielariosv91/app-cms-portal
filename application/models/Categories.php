<?php

class Categories extends CI_Model
{
    public function show()
    {
        return $this->db->get('categories')->result_object();
    }

    public function store()
    {
        $create = new stdClass();
        $create->name = $this->input->post('name');

        if ($this->db->insert("categories", $create)) {
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
}

?>