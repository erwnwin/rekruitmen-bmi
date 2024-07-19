<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Resend extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Kirim ulang : Rekrutmen Online PT BMI Makassar";

        $this->load->view('depan/resend', $data);
    }
}

/* End of file Resend.php */
