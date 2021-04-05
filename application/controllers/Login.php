<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index()
    {
        if($this->session->userdata('nama') == 'admin')
        {
            redirect('admin');
        }
        if($this->session->flashdata())
        {
            echo $this->session->flashdata('notif');
        }
        $this->load->view('login');
    }

    function proses()
    {
        $username = $this->input->post('user_adm');
        $password = $this->input->post('pass_adm');

        if ($this->user_model->login($username, $password))
        {
            $nama = $this->session->userdata('nama');

            echo "<script type='text/javascript'>alert('Selamat Datang $nama!');";
            
            if ($this->session->userdata('level') == 'admin')
            {
                echo "window.location = '" . base_url() . "admin'";
            }

            echo "</script>";
        }
        else
        {
            $this->session->set_flashdata('notif', 'Username atau password yang dimasukkan tidak sesuai.');
            redirect('login');
        }
    }

    function logout()
    {
        $this->user_model->logout();
    }
}
