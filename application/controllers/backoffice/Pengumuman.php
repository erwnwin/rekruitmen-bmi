<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
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
        $data['title'] = "Pengumuman : PT BMI Makassar";
        $data['pengumuman'] = $this->m_app->tampil_info();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('template/footer', $data);
    }

    public function jadwal()
    {
        $data['title'] = "Pengumuman : PT BMI Makassar";
        $data['pengumuman'] = $this->m_app->tampil_info();

        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal 
        JOIN alur ON jadwal.id_alur=alur.id_alur")->result();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/jadwal', $data);
        $this->load->view('template/footer', $data);
    }

    public function create()
    {
        $data['title'] = "Pengumuman : PT BMI Makassar";

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/create_pengumuman', $data);
        $this->load->view('template/footer', $data);
    }

    public function act()
    {
        // $id_user = $this->input->post('id_user');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $id_user = $this->input->post('id_user');
        $img_upload = $_FILES['img_upload']['name'];

        if ($img_upload = '') {
        } else {
            $config['upload_path']   = './upload/libs/files';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('img_upload')) {
                $this->session->set_flashdata('gagal', 'File harus berekstensi .Jpg .Png .Jpeg dan maksimal ukuran 1 MB');
                redirect(base_url('pengumuman'));
            } else {
                $img_upload = $this->upload->data('file_name');
            }

            $data = array(
                'id_user' => 1,
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'id_user' => $id_user,
                'img_upload' => $img_upload,
            );
            $this->m_app->input_data($data, 'pengumuman');
            $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Sukses</h4>
            Data Job Vacancy Berhasil ditambahkan.
            </div>');
            redirect(base_url('pengumuman'));
        }
    }
}

/* End of file Pengumuman.php */
