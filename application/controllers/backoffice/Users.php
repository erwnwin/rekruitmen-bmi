<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
        $data['title'] = "Pengguna Sistem : PT BMI Makassar";


        $data['pengguna'] = $this->db->query("SELECT * FROM user")->result();

        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/users', $data);
        $this->load->view('template/footer', $data);
    }

    public function act()
    {
        $role_id = $this->input->post('role_id');
        $is_active = $this->input->post('is_active');
        $nama_pengguna = $this->input->post('nama_pengguna');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // $ket = $this->input->post('ket');
        // $status = $this->input->post('status');
        // $agama = $this->input->post('agama');

        $data = array(
            'role_id' => $role_id,
            'is_active' => $is_active,
            'nama_pengguna' => $nama_pengguna,
            'email' => $email,
            'password' => $password,
            // 'ket' => $ket,
            // 'status' => $status,
            // 'agama' => $agama,
        );
        $this->db->insert('user', $data);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('users'));
    }
}

/* End of file Users.php */
