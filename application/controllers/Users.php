<?php
class Users extends CI_Controller
{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper('url_helper');
        }

        public function view($page = 'create_user')
        {
                if (!file_exists(APPPATH . 'views/users/' . $page . '.php')) {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $this->load->helper('form');
                $this->load->helper('url');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('birth', 'Birth', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('color', 'Color', 'required');


                if ($this->form_validation->run() === FALSE) {

                        $this->load->view('templates/header');
                        $this->load->view('users/' . $page);
                        $this->load->view('templates/footer');
                } else {
                        $this->users_model->set_users();
                        $this->load->view('users/success');
                }
        }
}
