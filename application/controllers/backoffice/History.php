<?php

defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
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
        $data['title'] = "Pengembangan";

        $this->load->view('admin/history_pelamar', $data);
    }
}

/* End of file History.php */
