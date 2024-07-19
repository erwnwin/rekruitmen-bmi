<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function index()
    {
        $data['title'] = "FAQ E-Rekrutmen PT BMI Makassar";

        $this->load->view('depan/header', $data);
        $this->load->view('depan/faq', $data);
        $this->load->view('depan/footer', $data);
    }
}

/* End of file Faq.php */
