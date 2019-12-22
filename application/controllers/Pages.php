<?php
class Pages extends CI_Controller
{

        public function view($page = 'home')
        {
                if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
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
                        $this->load->view('pages/' . $page);
                        $this->load->view('templates/footer');
                } else {
                        $this->load->view('pages/success');
                }
        }
}
