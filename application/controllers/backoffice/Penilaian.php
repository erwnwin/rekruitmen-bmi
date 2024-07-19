<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_app');
        if ($this->session->userdata('login') != "masuk") {
            redirect(base_url("backoffice/login"));
        }
    }


    public function index()
    {
        $data['title'] = "Interview : PT BMI Makassar";

        $data['job'] = $this->m_app->tampil_job();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/penilaian', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail_interview($id)
    {
        $data['title'] = "Pelamar : PT BMI Makassar";
        $where = array('id_job' => $id);

        $data['semua_pelamar'] = $this->db->query("SELECT * FROM pelamar 
        JOIN akun_pelamar ON pelamar.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        JOIN pendidikan_data ON akun_pelamar.id_akun_pelamar=pendidikan_data.id_akun_pelamar
        JOIN job_vacancy ON pelamar.id_job=job_vacancy.id_job
        WHERE pelamar.id_job='$id' AND status_lamaran='Berkas' ")->result();

        $data['semua_pelamar1'] = $this->db->query("SELECT * FROM job_vacancy 
        JOIN pelamar ON job_vacancy.id_job=pelamar.id_job
        WHERE job_vacancy.id_job='$id'")->num_rows();

        $data['job'] = $this->m_app->tampil_job();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_interview_job', $data);
        $this->load->view('template/footer', $data);
    }

    public function create_score($id)
    {
        $data['title'] = "Input Nilai : PT BMI Makassar";
        $where = array('id_job' => $id);

        $data['pelamar_det'] = $this->db->query("SELECT * FROM pelamar 
        JOIN akun_pelamar ON pelamar.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        JOIN pendidikan_data ON akun_pelamar.id_akun_pelamar=pendidikan_data.id_akun_pelamar
        JOIN lampiran_data ON akun_pelamar.id_akun_pelamar=lampiran_data.id_akun_pelamar
        JOIN kontak_data ON akun_pelamar.id_akun_pelamar=kontak_data.id_akun_pelamar
        JOIN personal_data ON akun_pelamar.id_akun_pelamar=personal_data.id_akun_pelamar
        JOIN job_vacancy ON pelamar.id_job=job_vacancy.id_job
        JOIN penilaian ON pelamar.id_akun_pelamar=penilaian.id_akun_pelamar
        WHERE pelamar.id_akun_pelamar='$id'")->result();

        $data['jadwal_interview'] = $this->db->query("SELECT * FROM jadwal WHERE id_alur='2' ")->result();
        $data['jadwal_kesehatan'] = $this->db->query("SELECT * FROM jadwal WHERE id_alur='3' ")->result();

        // $data['semua_pelamar1'] = $this->db->query("SELECT * FROM job_vacancy 
        // JOIN pelamar ON job_vacancy.id_job=pelamar.id_job
        // WHERE job_vacancy.id_job='$id'")->num_rows();

        $data['job'] = $this->m_app->tampil_job();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/input_nilai_interview', $data);
        $this->load->view('template/footer', $data);
    }


    // Kesehatan
    public function kesehatan()
    {
        $data['title'] = "Penilaian : PT BMI Makassar";

        $data['job'] = $this->m_app->tampil_job();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/kesehatan', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail_kesehatan($id)
    {
        $data['title'] = "Pelamar : PT BMI Makassar";
        $where = array('id_job' => $id);

        $data['semua_pelamar'] = $this->db->query("SELECT * FROM pelamar 
        JOIN akun_pelamar ON pelamar.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        JOIN pendidikan_data ON akun_pelamar.id_akun_pelamar=pendidikan_data.id_akun_pelamar
        JOIN job_vacancy ON pelamar.id_job=job_vacancy.id_job
        WHERE pelamar.id_job='$id' AND status_lamaran='Wawancara' ")->result();

        $data['semua_pelamar1'] = $this->db->query("SELECT * FROM job_vacancy 
        JOIN pelamar ON job_vacancy.id_job=pelamar.id_job
        WHERE job_vacancy.id_job='$id'")->num_rows();

        $data['job'] = $this->m_app->tampil_job();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_kesehatan_job', $data);
        $this->load->view('template/footer', $data);
    }
}

/* End of file Penilaian.php */
