<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_app');
    }


    public function index()
    {
        $data['title'] = "Info Rekrutmen : E-Rekrutmen PT BMI Makassar";

        $data['info'] = $this->db->query("SELECT * FROM pengumuman")->result();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cpegawai/info', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function detail($id_pengumuman)
    {
        $data['title'] = "Info Rekrutmen : E-Rekrutmen PT BMI Makassar";

        $data['info'] = $this->db->query("SELECT * FROM pengumuman WHERE id_pengumuman='$id_pengumuman'")->result();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cpegawai/detail_info', $data);
        $this->load->view('vcalon/footer', $data);
    }
}

/* End of file Info.php */
