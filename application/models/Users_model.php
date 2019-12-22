<?php
class Users_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function set_users()
{
    $this->load->helper('url');

    $data = array(
        'name' => $this->input->post('name'),
        'birth' => $this->input->post('birth'),
        'email' => $this->input->post('email'),
        'color' => $this->input->post('color')
    );

    return $this->db->insert('news', $data);
}
}
