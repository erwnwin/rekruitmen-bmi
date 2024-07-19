<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Login Backoffice : PT BMI Makassar";

        $this->load->view('admin/login', $data);
    }

    public function act()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email, 'password' => $password])->row_array();

        //user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                // cek password
                if ($user['password']) {
                    $data = [
                        'email' => $user['email'],
                        'id_user' => $user['id_user'],
                        'nama_pengguna' => $user['nama_pengguna'],
                        'role_id' => $user['role_id'],
                        'login' => 'masuk'
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        $this->session->set_flashdata('sukses', 'Selamat Datang ' . $user['nama_pengguna'] . ' Anda Berhasil Login.');
                        redirect(base_url('dashboard'));
                    } elseif ($user['role_id'] == 2) {
                        $this->session->set_flashdata('sukses', 'Selamat Datang ' . $user['nama_pengguna'] . ' Anda Berhasil  Login.');
                        redirect(base_url('dashboard'));
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Password yang anda masukkan salah.');
                    // $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                    // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    // <h4><i class="icon fa fa-ban"></i> Gagal</h4>
                    // Password yang anda masukkan salah.
                    // </div>');
                    redirect(base_url('backoffice/login'));
                }
            } else {
                $this->session->set_flashdata('gagal', 'Email anda belum diaktivasi');

                redirect(base_url('backoffice/login'));
            }
        } else {
            $this->session->set_flashdata('gagal', 'Email tidak belum terdaftar. Silahkan lakukan registrasi akun');
            redirect(base_url('backoffice/login'));
        }
    }
}

/* End of file Login.php */
