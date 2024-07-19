<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Curriculum_vitae extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_wilayah');
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = "CV Saya : E-Rekrutmen PT BMI Makassar";

        $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');

        $data['personal'] = $this->db->query("SELECT * FROM personal_data 
        JOIN akun_pelamar ON personal_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE personal_data.id_akun_pelamar='$id_akun_pelamar' ")->num_rows();

        $data['kontak'] = $this->db->query("SELECT * FROM kontak_data 
        JOIN akun_pelamar ON kontak_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE kontak_data.id_akun_pelamar='$id_akun_pelamar' ")->num_rows();

        $data['alamat'] = $this->db->query("SELECT * FROM alamat_data 
        JOIN akun_pelamar ON alamat_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE alamat_data.id_akun_pelamar='$id_akun_pelamar' ")->num_rows();

        $data['pendidikan'] = $this->db->query("SELECT * FROM pendidikan_data 
        JOIN akun_pelamar ON pendidikan_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE pendidikan_data.id_akun_pelamar='$id_akun_pelamar' ")->num_rows();

        $data['lampiran'] = $this->db->query("SELECT * FROM lampiran_data 
        JOIN akun_pelamar ON lampiran_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE lampiran_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $data['pekerjaan'] = $this->db->query("SELECT * FROM pekerjaan_data 
        JOIN akun_pelamar ON pekerjaan_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE pekerjaan_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cpegawai/cv', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function data_personal()
    {
        $data['title'] = "Data Personal : E-Rekrutmen PT BMI Makassar";

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cv/data_personal', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function data_alamat()
    {
        $data['title'] = "Data Alamat : E-Rekrutmen PT BMI Makassar";
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
        $data['kabupaten'] = $this->m_wilayah->get_all_kab();
        $data['kecamatan'] = $this->m_wilayah->get_all_kec();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cv/data_alamat', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function data_kontak()
    {
        $data['title'] = "Data Kontak : E-Rekrutmen PT BMI Makassar";

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cv/data_kontak', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function data_pendidikan()
    {
        $data['title'] = "Data Riwayat Pendidikan : E-Rekrutmen PT BMI Makassar";

        $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');

        $data['pendidikan'] = $this->db->query("SELECT * FROM pendidikan_data 
        JOIN akun_pelamar ON pendidikan_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE pendidikan_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cv/data_pendidikan', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function data_pekerjaan()
    {
        $data['title'] = "Data Riwayat Pekerjaan : E-Rekrutmen PT BMI Makassar";

        $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');

        $data['pekerjaan'] = $this->db->query("SELECT * FROM pekerjaan_data 
        JOIN akun_pelamar ON pekerjaan_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE pekerjaan_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cv/data_pekerjaan', $data);
        $this->load->view('vcalon/footer', $data);
    }

    public function data_lampiran()
    {
        $data['title'] = "Data Lampiran : E-Rekrutmen PT BMI Makassar";

        $id_akun_pelamar = $this->session->userdata('id_akun_pelamar');

        $data['lampiran'] = $this->db->query("SELECT * FROM lampiran_data 
        JOIN akun_pelamar ON lampiran_data.id_akun_pelamar=akun_pelamar.id_akun_pelamar
        WHERE lampiran_data.id_akun_pelamar='$id_akun_pelamar' ")->result();

        $this->load->view('vcalon/headnew', $data);
        $this->load->view('vcalon/header', $data);
        $this->load->view('cv/data_lampiran', $data);
        $this->load->view('vcalon/footer', $data);
    }

    function add_ajax_kab($id_prov)
    {

        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $data = "<option disable selected>-- Pilih Kabupaten/Kota --</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_kec($id_kab)
    {
        $query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $data = "<option disabled selected>-- Pilih Kecamatan --</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id_kec)
    {
        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $data = "<option disabled selected>-- Pilih Desa --</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }
}

/* End of file Curriculum_vitae.php */
