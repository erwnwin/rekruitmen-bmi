<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') != "masuk") {
            redirect(base_url("backoffice/login"));
        }
    }


    public function index()
    {
        $data['title'] = "Profil : PT BMI Makassar";

        // $this->load->view('template/head', $data);
        // $this->load->view('template/sidebar', $data);
        // $this->load->view('template/header', $data);
        $this->load->view('admin/profil', $data);
        // $this->load->view('template/footer', $data);
    }
}

/* End of file Profil.php */
