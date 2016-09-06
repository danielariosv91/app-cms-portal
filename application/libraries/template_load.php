<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template_Load extends CI_Loader
{
    /**
     * @param $folder_name
     * @param $template_name
     * @param $vars
     * @param $maintainer : if views are maintainers chenge route.
     */


    public function load_view($folder_name, $template_name, $vars = array(), $maintainer = FALSE)
    {

        $out = new stdClass();
        $out->session = $this->get_current_session();

        if ($out->session) {

            /** SET NOTIFICATION IS SESSION IS SET */
            $out->notifications = $this->get_notifications();

            if ($folder_name === 'dashboard') {
                if ($out->session->role === 'ROLE_ADMIN') {
                    $route = 'pages/' . $folder_name . '/dashboard-admin';
                } else {
                    $route = 'pages/' . $folder_name . '/dashboard-member';
                }
            } else {
                $route = 'pages/' . $folder_name . '/' . $template_name;
            }


            //LOAD TEMPLATES
            $this->view('templates/header');
            $this->view('templates/nav', $out);
            $this->view($route, $vars);
            $this->view('templates/footer');

        } else {
            $this->view('templates/header');
            $this->view('pages/login/index');
            $this->view('templates/footer');
        }
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

    public function get_current_session()
    {
        $CI = &get_instance();
        return $CI->session->userdata('logged_in');
    }

    public function get_notifications()
    {
        $CI = &get_instance();
        return $CI->notification->show();
    }
}




