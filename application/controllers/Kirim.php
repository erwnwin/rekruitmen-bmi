<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kirim extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('sms');
    }
    public function index()
    {
        kirim_sms('082194460105', 'percobaan kirim sms dari zenziva');
    }
}

/* End of file Kirim.php */
