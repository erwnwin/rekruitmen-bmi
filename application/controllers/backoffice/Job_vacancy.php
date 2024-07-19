<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Job_vacancy extends CI_Controller
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
        $data['title'] = "Job Vacancies : PT BMI Makassar";
        $data['job'] = $this->m_app->tampil_job();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/job_vacancy', $data);
        $this->load->view('template/footer', $data);
    }

    public function create()
    {
        $data['title'] = "Job Vacancies : PT BMI Makassar";

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/create_job_vacancy', $data);
        $this->load->view('template/footer', $data);
    }

    public function act()
    {
        // $id_user = $this->input->post('id_user');
        $nama_job = $this->input->post('nama_job');
        $persyaratan = $this->input->post('persyaratan');
        $status = $this->input->post('status');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar = '') {
        } else {
            $config['upload_path']   = './upload/libs/files';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('gagal', 'File harus berekstensi .Jpg .Png .Jpeg dan maksimal ukuran 1 MB');
                redirect(base_url('job-vacancies'));
            } else {
                $gambar = $this->upload->data('file_name');
            }

            $data = array(
                'id_user' => 1,
                'nama_job' => $nama_job,
                'persyaratan' => $persyaratan,
                'status' => $status,
                'gambar' => $gambar,
            );
            $this->m_app->input_data($data, 'job_vacancy');
            $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Sukses</h4>
           Data Job Vacancy Berhasil disimpan.
            </div>');
            redirect(base_url('job-vacancies'));
        }
    }

    public function close($id)
    {
        $sql = "UPDATE job_vacancy SET status='Close' WHERE id_job=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('sukses', 'Lowongan ini berhasil ditutup');
        redirect(base_url('job-vacancies'));
    }

    public function open($id)
    {
        $sql = "UPDATE job_vacancy SET status='Open' WHERE id_job=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('sukses', 'Lowongan ini berhasil dibuka');
        redirect(base_url('job-vacancies'));
    }
}

/* End of file Job_vacancy.php */
