<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_movie_ci extends CI_Controller
{

    /* ==========================================
        Dashboard Admin Page for this controller.
       ==========================================
     */

    public function movies()
    {

        //$data['directors'] = $this->directors_model->get_directed();
        //$data['categories'] = $this->categories_model->get_categories();
        //$data['movies'] = $this->movies->get_all_movies();


        $this->load->view('administrador/templates/header');
        $this->load->view('administrador/templates/nav');
        $this->load->view('administrador/views/movies_view');
        $this->load->view('administrador/templates/footer');
    }


    public function movie_image($url)
    {

        $data['movie'] = $this->movies->get_movie_by_url($url);


        $this->load->view('administrador/templates/header');
        $this->load->view('administrador/templates/nav');
        $this->load->view('administrador/views/movie_image_view', $data);
    }


    /* ===============================================================
        Action: Add Movie, agrega a una pelicula a la tabla t_movies.
       ===============================================================
     */

    public function add_movie()
    {


        $this->form_validation->set_rules('m_name', 'MovieName');
        $this->form_validation->set_rules('m_director', 'MovieDirector');
        $this->form_validation->set_rules('m_year', 'MovieYear');
        $this->form_validation->set_rules('m_music', 'MovieMusic');
        $this->form_validation->set_rules('m_category', 'MovieCategory');
        $this->form_validation->set_rules('m_article', 'MovieArticle');
        $this->form_validation->set_rules('m_quotes', 'MovieQuotes');

        if ($this->form_validation->run() == false) {

            //handle error

        } else {

            $this->movies->add_movie();
            redirect('admin/movies');
        }
    }

    public function update_movie($id)
    {


        $this->form_validation->set_rules('m_name', 'MovieName');
        $this->form_validation->set_rules('m_director', 'MovieDirector');
        $this->form_validation->set_rules('m_year', 'MovieYear');
        $this->form_validation->set_rules('m_music', 'MovieMusic');
        $this->form_validation->set_rules('m_category', 'MovieCategory');
        $this->form_validation->set_rules('m_article', 'MovieArticle');
        $this->form_validation->set_rules('m_quotes', 'MovieQuotes');

        if ($this->form_validation->run() == false) {

            //handle error

        } else {

            $this->movies->update_movie($id);
            redirect('admin/movies');
        }
    }

    public function update_movie_image($id)
    {


        $this->form_validation->set_rules('file', 'HiddenFile');

        if ($this->form_validation->run() == false) {


        } else {

            $this->movies->edit_photo_movie($id);
            redirect('admin/movies');
        }

    }

    public function remove_movie($id)
    {

        $this->movies->delete_movie($id);
        redirect('admin/movies');

    }

    public function get_single_movie($id)
    {

        $data['movie'] = $this->movies->get_movie_by_id($id);
        echo json_encode($data);
    }

    public function active_movie_item($id)
    {

        $this->movies->active_item($id);
        redirect('admin/movies');
    }

    public function add_directed()
    {


        $this->form_validation->set_rules('d_name', 'DirectedName');
        $this->form_validation->set_rules('d_description', 'DirectedDescription');

        if ($this->form_validation->run() == false) {

            //handle error

        } else {

            $this->directors_model->add_director();
            redirect('admin/movies');
        }

    }
}