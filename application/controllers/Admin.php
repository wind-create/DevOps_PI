<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->user_model->check_login();
    }

    function survey()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $gender = $this->input->post('gender');
        $favorite_hero = $this->input->post('favorite_hero');
        $dropdown = $this->input->post('dropdown');

        $data_survey = array(
            'nama' => $nama,
            'email' => $email,
            'number' => $number,
            'gender' => $gender,
            'favorite_hero' => $favorite_hero,
            'dropdown' => $dropdown,
        );
}
