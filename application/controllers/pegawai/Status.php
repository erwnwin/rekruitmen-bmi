<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "Status : E-Rekrutmen PT BMI Makassar";

        $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');

        $data['personal'] = $this->db->query("SELECT * FROM personal_data 
        JOIN akun_pelamar ON personal_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE personal_data.id_akun_pelamar='$id_akun_pelamar' ")->num_rows();

        $data['kontak'] = $this->db->query("SELECT * FROM kontak_data 
        JOIN akun_pelamar ON kontak_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE kontak_data.id_akun_pelamar='$id_akun_pelamar' ")->num_rows();

        $data['pendidikan'] = $this->db->query("SELECT * FROM pendidikan_data 
        JOIN akun_pelamar ON pendidikan_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE pendidikan_data.id_akun_pelamar='$id_akun_pelamar' ")->num_rows();

        $data['lampiran'] = $this->db->query("SELECT * FROM lampiran_data 
        JOIN akun_pelamar ON lampiran_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE lampiran_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $data['alamat'] = $this->db->query("SELECT * FROM alamat_data 
        JOIN akun_pelamar ON alamat_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE alamat_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $data['pekerjaan'] = $this->db->query("SELECT * FROM pekerjaan_data 
        JOIN akun_pelamar ON pekerjaan_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE pekerjaan_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $data['lamaran'] = $this->db->query("SELECT * FROM pelamar 
        JOIN akun_pelamar ON pelamar.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        JOIN job_vacancy ON pelamar.id_job=job_vacancy.id_job
        WHERE pelamar.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $data['penilaian'] = $this->db->query("SELECT * FROM penilaian 
        JOIN akun_pelamar ON penilaian.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE penilaian.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cpegawai/status', $data);
        $this->load->view('vcalon/footer', $data);
    }
}

/* End of file Status.php */
