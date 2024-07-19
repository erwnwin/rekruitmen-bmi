<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Job_vacancy extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_app');
        $this->load->model('m_pelamar');
    }


    public function index()
    {
        $data['title'] = "Lowongan : E-Rekrutmen PT BMI Makassar";

        $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');

        $data['job']  = $this->db->query("SELECT * FROM job_vacancy WHERE status='Open' ")->result();

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

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cpegawai/job', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = "Detail Lowongan : E-Rekrutmen PT BMI Makassar";

        $where = array('id_job' => $id);

        $data['djob']  = $this->db->query("SELECT * FROM job_vacancy WHERE status='Open' AND id_job='$id' ")->result();


        $data['semua_pelamar1'] = $this->db->query("SELECT * FROM job_vacancy 
        JOIN pelamar ON job_vacancy.id_job=pelamar.id_job
        WHERE job_vacancy.id_job='$id'")->num_rows();

        $data['job'] = $this->m_app->tampil_job();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cpegawai/detail_job', $data);
        $this->load->view('vcalon/footer', $data);
    }

    function lamar($id_job)
    {

        $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');
        $id_job = $id_job;

        $sql = $this->db->query("SELECT * FROM pelamar WHERE id_job='$id_job' or id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();

        if ($cek > 0) {
            $this->session->set_flashdata('warning', 'Saudara(i) telah melakukan lamaran. Pengajuan Lamaran hanya dilakukan untuk SATU POSISI saja');
            redirect(base_url('user/job-vacancy'));
        } elseif ($cek >= 1) {
            $this->session->set_flashdata('warning', 'Saudara(i) telah melakukan lamaran. Pengajuan Lamaran hanya dilakukan untuk SATU POSISI saja');
            redirect(base_url('user/job-vacancy'));
        } else {
            $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');
            $id_job = $id_job;
            $kode_alternatif = $this->input->post('kode_alternatif');
            // $berkas = $this->input->post('kode_alternatif');
            // $kode_alternatif = $this->input->post('kode_alternatif');

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'id_job' => $id_job,
                'Status_lamaran' => 'Direkam'

            );

            $data1 = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'id_job' => $id_job,
                'berkas' => 'Direkam'

            );

            // $where = array(
            //     'id_akun_pelamar' => $id_akun_pelamar
            // );

            // $this->m_pelamar->update_data($where, $data, 'pendidikan');
            $this->m_pelamar->input_data($data, 'pelamar');
            $this->m_pelamar->input_data($data1, 'penilaian');
            $this->session->set_flashdata('sukses', 'Lamaran anda telah direkam. Terima kasih atas partisipasi anda');
            redirect(base_url('user/job-vacancy'));
        }
    }
}

/* End of file Job_vacancy.php */
