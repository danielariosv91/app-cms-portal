<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Autoload_File extends CI_Loader
{
    /**
     * @param $folder_name
     * @param $template_name
     * @param $vars
     */


    public function rendering($folder_name, $template_name, $vars = array())
    {
        $out = new stdClass();
        $route = 'admin/pages/' . $folder_name . '/' . $template_name;

        //LOAD TEMPLATES
        $this->view('admin/templates/header');
        $this->view('admin/templates/nav', $out);
        $this->view($route, $vars);
        $this->view('admin/templates/footer');
    }

    public function load_error_view()
    {
        $out = new stdClass();
        $out->session = $this->get_current_session();

        if ($out->session) {
            $this->view('templates/header');
            $this->view('templates/nav', $out);
            $this->view('errors/not_found_view_app');
            $this->view('templates/footer');
        } else {

            $this->view('templates/header');
            $this->view('errors/not_found_view');
            $this->view('templates/footer');
        }
    }

    public
    function get_current_session()
    {
        $CI = &get_instance();
        return $CI->session->userdata('logged_in');
    }

    public
    function get_notifications()
    {
        $CI = &get_instance();
        return $CI->notification->show();
    }
}