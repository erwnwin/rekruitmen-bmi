<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function index()
    {
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }

    public function logout_admin()
    {
        $this->session->sess_destroy();
        redirect(base_url('backoffice/login'));
    }
}

/* End of file Logout.php */
