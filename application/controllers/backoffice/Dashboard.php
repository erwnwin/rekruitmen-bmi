<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = "Dashboard : PT BMI Makassar";

        $ip    = $this->input->ip_address(); // Mendapatkan IP user
        $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $waktu = time(); //
        $timeinsert = date("Y-m-d H:i:s");

        $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung

        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();

        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung

        $bataswaktu = time() - 300;

        $pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online


        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer', $data);
    }
}

/* End of file Dashboard.php */
