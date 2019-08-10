<?php
class Registration_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_news($slug = FALSE)
        {
        if ($slug === FALSE)
        {
                $query = $this->db->get('users');
                return $query->result_array();
        }

        $query = $this->db->get_where('users', array('slug' => $slug));
        return $query->row_array();
        }

        public function set_news()
        {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
                // 'title' => $this->input->post('title'),
                // 'slug' => $slug,
                // 'text' => $this->input->post('text')
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'mi' => $this->input->post('mi'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
        );

        return $this->db->insert('users', $data);
        }
}