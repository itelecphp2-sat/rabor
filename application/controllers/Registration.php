<?php
class Registration extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('registration_model');
                $this->load->helper('url_helper');
        }

        public function create()
        {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Registration';

        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('firstname', 'Fisrtname', 'required');
        $this->form_validation->set_rules('mi', 'MI', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
                $this->load->view('templates/header', $data);
                $this->load->view('registration/create');
                $this->load->view('templates/footer');

        }
        else
        {
                $this->registration_model->set_news();
                $this->load->view('registration/success');
        }
        }

        public function view($slug = NULL)
        {
                $data['reg_item'] = $this->registration_model->get_news($slug);
                if (empty($data['reg_item']))
                {
                        show_404();
                }
        
                $data['title'] = $data['reg_item']['title'];
        
                $this->load->view('templates/header', $data);
                $this->load->view('registration/view', $data);
                $this->load->view('templates/footer');
        }
}