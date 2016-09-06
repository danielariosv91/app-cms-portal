<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Movie_Controller extends CI_Controller
{

    /* ==========================================
        Dashboard Admin Page for this controller.
       ==========================================
     */

    /**
     * Show Index view Movie
     * @param folder_name
     * @param file_name
     */

    public function show()
    {
        $this->autoload_file->rendering('movies', 'show');
    }

    /**
     * Create Form view Movie Method
     * @param folder_name
     * @param file_name
     */

    public function create()
    {
        $this->autoload_file->rendering('movies', 'create');
    }

    /**
     * Store Movie Method
     * @model movies
     */

    public function store()
    {
        $this->movies->store();
    }

    /**
     * Create Form view to update Movie.
     * @param folder_name
     * @param file_name
     */

    public function edit()
    {
        $this->autoload_file->rendering();
    }


    /**
     * Update Movie Method
     * @model movies
     */

    public function update()
    {
        $this->movies->update();
    }

    /**
     * Delete Movie Method
     * @model movies
     */

    public function delete()
    {
        $this->movies->update();
    }


    /** Old methods */
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

            $this->movie_model->update_movie($id);
            redirect('admin/movies');
        }
    }

    public function update_movie_image($id)
    {


        $this->form_validation->set_rules('file', 'HiddenFile');

        if ($this->form_validation->run() == false) {


        } else {

            $this->movie_model->edit_photo_movie($id);
            redirect('admin/movies');
        }

    }

    public function remove_movie($id)
    {

        $this->movie_model->delete_movie($id);
        redirect('admin/movies');

    }

    public function get_single_movie($id)
    {

        $data['movie'] = $this->movie_model->get_movie_by_id($id);
        echo json_encode($data);
    }

    public function active_movie_item($id)
    {

        $this->movie_model->active_item($id);
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