<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Reset extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Reset Password : Rekrutmen Online PT BMI Makassar";

        $this->load->view('depan/reset_pass', $data);
    }
}

/* End of file Reset.php */
