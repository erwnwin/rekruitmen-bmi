<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelamar');
    }


    public function personal_act()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_panggilan = $this->input->post('nama_panggilan');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $status_kawin = $this->input->post('status_kawin');
        $agama = $this->input->post('agama');
        $berat = $this->input->post('berat');
        $tinggi = $this->input->post('tinggi');
        $gol_darah = $this->input->post('gol_darah');
        $suku = $this->input->post('suku');
        $no_bpjs = $this->input->post('no_bpjs');
        $no_tenaga = $this->input->post('no_tenaga');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $npwp = $this->input->post('npwp');

        $data = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'nama_panggilan' => $nama_panggilan,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'status_kawin' => $status_kawin,
            'agama' => $agama,
            'berat' => $berat,
            'tinggi' => $tinggi,
            'gol_darah' => $gol_darah,
            'no_bpjs' => $no_bpjs,
            'no_tenaga' => $no_tenaga,
            'npwp' => $npwp,
            'kewarganegaraan' => $kewarganegaraan,
            'suku' => $suku
        );

        $this->db->insert('personal_data', $data);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('user/curriculum-vitae'));
    }

    public function alamat_act()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $alamat_ktp = $this->input->post('alamat_ktp');
        $provinsi = $this->input->post('provinsi');
        $kota_kab = $this->input->post('kota_kab');
        $kecamatan = $this->input->post('kecamatan');
        $kelurahan = $this->input->post('kelurahan');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $kode_pos = $this->input->post('kode_pos');
        $alamat_domisili = $this->input->post('alamat_domisili');
        $provinsi_dom = $this->input->post('provinsi_dom');
        $kota_kab_dom = $this->input->post('kota_kab_dom');
        $kecamatan_dom = $this->input->post('kecamatan_dom');
        $kode_pos_dom = $this->input->post('kode_pos_dom');
        $kelurahan_dom = $this->input->post('kelurahan_dom');
        $rt_dom = $this->input->post('rt_dom');
        $rw_dom = $this->input->post('rw_dom');

        $data = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'alamat_ktp' => $alamat_ktp,
            'provinsi' => $provinsi,
            'kota_kab' => $kota_kab,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'rt' => $rt,
            'rw' => $rw,
            'kode_pos' => $kode_pos,
            'alamat_domisili' => $alamat_domisili,
            'provinsi_dom' => $provinsi_dom,
            'kota_kab_dom' => $kota_kab_dom,
            'kecamatan_dom' => $kecamatan_dom,
            'kelurahan_dom' => $kelurahan_dom,
            'rt_dom' => $rt_dom,
            'rw_dom' => $rw_dom,
            'kode_pos_dom' => $kode_pos_dom

        );

        $this->db->insert('alamat_data', $data);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('user/curriculum-vitae'));
    }

    public function kontak_act()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $no_wa = $this->input->post('no_wa');
        $no_wa_keluarga = $this->input->post('no_wa_keluarga');
        $nama_ig = $this->input->post('nama_ig');
        $nama_fb = $this->input->post('nama_fb');
        // $status = $this->input->post('status');
        // $agama = $this->input->post('agama');

        $data = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'no_wa' => $no_wa,
            'no_wa_keluarga' => $no_wa_keluarga,
            'nama_ig' => $nama_ig,
            'nama_fb' => $nama_fb,
            // 'status' => $status,
            // 'agama' => $agama,
        );
        $this->db->insert('kontak_data', $data);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('user/curriculum-vitae'));
    }

    public function pendidikan_act()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_sekolah = $this->input->post('nama_sekolah');
        $jurusan = $this->input->post('jurusan');
        $jenjang = $this->input->post('jenjang');
        $nilai = $this->input->post('nilai');
        $lulus = $this->input->post('lulus');
        // $agama = $this->input->post('agama');

        $data = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'nama_sekolah' => $nama_sekolah,
            'jurusan' => $jurusan,
            'jenjang' => $jenjang,
            'nilai' => $nilai,
            'lulus' => $lulus,
            // 'agama' => $agama,
        );
        $this->db->insert('pendidikan_data', $data);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('user/curriculum-vitae/data-pendidikan'));
    }

    public function pekerjaan_act()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_pt = $this->input->post('nama_pt');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $mulai_kerja = $this->input->post('mulai_kerja');
        $selesai_kerja = $this->input->post('selesai_kerja');
        $ket = $this->input->post('ket');
        // $status = $this->input->post('status');
        // $agama = $this->input->post('agama');

        $data = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'nama_pt' => $nama_pt,
            'nama_pekerjaan' => $nama_pekerjaan,
            'mulai_kerja' => $mulai_kerja,
            'selesai_kerja' => $selesai_kerja,
            'ket' => $ket,
            // 'status' => $status,
            // 'agama' => $agama,
        );
        $this->db->insert('pekerjaan_data', $data);
        $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
        redirect(base_url('user/curriculum-vitae/data-pekerjaan'));
    }


    function update_cv()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $cv = $_FILES['cv']['name'];

            if ($cv = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'pdf';
                $config['max_size']      = 10000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('cv')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .pdf dan maksimal ukuran 1 MB');
                } else {
                    $cv = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'cv' => $cv,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $cv = $_FILES['cv']['name'];

            if ($cv = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = 10000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('cv')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $cv = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'cv' => $cv,

            );


            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function update_foto()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $foto = $_FILES['foto']['name'];

            if ($foto = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size']      = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .jpg.jpeg dan maksimal ukuran 1 MB');
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'foto' => $foto,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $foto = $_FILES['foto']['name'];

            if ($foto = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size'] = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'foto' => $foto,

            );

            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function update_ktp()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $ktp = $_FILES['ktp']['name'];

            if ($ktp = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size']      = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ktp')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .jpg.jpeg dan maksimal ukuran 1 MB');
                } else {
                    $ktp = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'ktp' => $ktp,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $ktp = $_FILES['ktp']['name'];

            if ($ktp = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size'] = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ktp')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $ktp = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'ktp' => $ktp,

            );

            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function update_ijazah()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $ijazah = $_FILES['ijazah']['name'];

            if ($ijazah = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg|pdf';
                $config['max_size']      = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ijazah')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .jpg.jpeg dan maksimal ukuran 1 MB');
                } else {
                    $ijazah = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'ijazah' => $ijazah,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $ijazah = $_FILES['ijazah']['name'];

            if ($ijazah = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg}pdf';
                $config['max_size'] = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ijazah')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $ijazah = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'ijazah' => $ijazah,

            );

            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function update_bpjs()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $bpjs = $_FILES['bpjs']['name'];

            if ($bpjs = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size']      = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('bpjs')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .jpg.jpeg dan maksimal ukuran 1 MB');
                } else {
                    $bpjs = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'bpjs' => $bpjs,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $bpjs = $_FILES['bpjs']['name'];

            if ($bpjs = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size'] = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('bpjs')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $bpjs = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'bpjs' => $bpjs,

            );

            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function update_npwp()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $npwp = $_FILES['npwp']['name'];

            if ($npwp = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size']      = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('npwp')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .jpg.jpeg dan maksimal ukuran 1 MB');
                } else {
                    $npwp = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'npwp' => $npwp,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $npwp = $_FILES['npwp']['name'];

            if ($npwp = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size'] = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('npwp')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $npwp = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'npwp' => $npwp,

            );

            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function update_sertifikat()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $sertifikat = $_FILES['sertifikat']['name'];

            if ($sertifikat = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'pdf';
                $config['max_size']      = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('sertifikat')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .jpg.jpeg dan maksimal ukuran 1 MB');
                } else {
                    $sertifikat = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'sertifikat' => $sertifikat,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $sertifikat = $_FILES['sertifikat']['name'];

            if ($sertifikat = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('sertifikat')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $sertifikat = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'sertifikat' => $sertifikat,

            );

            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function update_kk()
    {
        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $sql = $this->db->query("SELECT id_akun_pelamar FROM lampiran_data where id_akun_pelamar='$id_akun_pelamar' ");
        $cek = $sql->num_rows();
        if ($cek > 0) {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $kk = $_FILES['kk']['name'];

            if ($kk = '') {
            } else {
                $config['upload_path']   = './upload/files';
                $config['allowed_types'] = 'pdf|jpg|jpeg';
                $config['max_size']      = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('kk')) {
                    $this->session->set_flashdata('gagal', 'File harus berekstensi .jpg.jpeg dan maksimal ukuran 1 MB');
                } else {
                    $kk = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'kk' => $kk,

            );

            $where = array(
                'id_akun_pelamar' => $id_akun_pelamar
            );

            $this->m_pelamar->update_data($where, $data, 'lampiran_data');
            // $this->m_pelamar->input_data($data, 'pendidikan');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        } else {

            $id_akun_pelamar = $this->input->post('id_akun_pelamar');
            $kk = $_FILES['kk']['name'];

            if ($kk = '') {
            } else {
                $config['upload_path'] = './upload/files';
                $config['allowed_types'] = 'pdf|jpg|jpeg';
                $config['max_size'] = 100000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('kk')) {
                    $this->session->set_flashdata('gagal', 'File gagal diupload');
                } else {
                    $kk = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_akun_pelamar' => $id_akun_pelamar,
                'kk' => $kk,

            );

            $this->m_pelamar->input_data($data, 'lampiran_data');
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan');
            redirect(base_url('user/curriculum-vitae/data-lampiran'));
        }
    }

    function acc_berkas()
    {

        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');
        $no_wa = $this->input->post('no_wa');

        $tanggal_jadwal = $this->input->post('tanggal_jadwal');
        $jam_jadwal = $this->input->post('jam_jadwal');

        $status_lamaran = $this->input->post('status_lamaran');
        $berkas = $this->input->post('berkas');
        $id_job = $this->input->post('id_job');


        // update data
        $data = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'status_lamaran' => $status_lamaran,
        );

        $where = array(
            'id_akun_pelamar' => $id_akun_pelamar
        );


        // update data
        $data1 = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'id_job' => $id_job,
            'berkas' => $berkas,
        );

        $where1 = array(
            'id_akun_pelamar' => $id_akun_pelamar
        );


        $this->_sendWa();
        $this->_sendEmailDaftar();

        $this->m_pelamar->update_data($where, $data, 'pelamar');
        $this->m_pelamar->update_data($where1, $data1, 'penilaian');
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses</h4>
        Data ini telah disetujui untuk mengikuti proses wawancara terjadwal.
        </div>');
        redirect(base_url('pelamar/detail-pelamar/' . $id_akun_pelamar));
    }

    private function _sendWa()
    {

        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');
        $no_wa = $this->input->post('no_wa');

        $tanggal_jadwal = $this->input->post('tanggal_jadwal');
        $jam_jadwal = $this->input->post('jam_jadwal');

        $status_lamaran = $this->input->post('status_lamaran');

        // NOTIFIKASI WA
        $token = "r5-2#s!RR_b6umzdW4pm";
        $target = "62" . $no_wa;

        // $token = "r5-2#s!RR_b6umzdW4pm";
        // $target = "6282194460105";
        // r5-2#s!RR_b6umzdW4pm

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => '*Hello, ' . $this->input->post('nama_lengkap') . '*

Kami mengundang saudara untuk mengikuti proses *TES INTERVIEW* yang akan dilaksanakan pada tanggal *' . $tanggal_jadwal . '* Pukul *' . $jam_jadwal . '* WITA di Kantor PT BMI Makassar dengan membawa berkas *ASLI*. Atas perhatiannya kami ucapkan terima kasih.

Pesan ini dikirim secara otomatis oleh sistem',
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: $token" //change TOKEN to your actual token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    private function _sendEmailDaftar()
    {

        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');
        $no_wa = $this->input->post('no_wa');

        $tanggal_jadwal = $this->input->post('tanggal_jadwal');
        $jam_jadwal = $this->input->post('jam_jadwal');

        $status_lamaran = $this->input->post('status_lamaran');

        // NOTIFIKASI EMAIL
        $config =
            [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => 'bmimakassar01@gmail.com',
                'smtp_pass' => 'lsuljvqwismhvfxy',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"

            ];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        // end config

        $this->email->from('bmimakassar01@gmail.com', 'E-Rekrutmen PT BMI Makassar');
        $this->email->to($this->input->post('alamat_email'));


        $this->email->subject('Proses Interview');
        $this->email->message('
   <h4 class="text-uppercase"> Dear ' . $nama_lengkap . ',</h4>

   <p style="text-align: justify;"> Salam Sejahtera, ' . $nama_lengkap . '. Kami mengundang anda untuk mengikuti TES INTERVIEW yang akan dilaksanakan pada tanggal' . $tanggal_jadwal . ' Pukul ' . $jam_jadwal . ' WITA
   di Kantor PT BMI Makassar dengan membawa berkas Asli yang telah diupload. Atas perhatiannya kami ucapakan terima kasih.</p>
   <br>
   <p style="text-align: justify; margin-top: 5px;">Pesan ini dikirim secara otomatis</p>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }


    function acc_interview()
    {

        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');
        $no_wa = $this->input->post('no_wa');

        $tanggal_jadwal = $this->input->post('tanggal_jadwal');
        $jam_jadwal = $this->input->post('jam_jadwal');

        $status_lamaran = $this->input->post('status_lamaran');

        $berkas = $this->input->post('berkas');
        $id_job = $this->input->post('id_job');
        $nilai_interview = $this->input->post('nilai_interview');


        // update data
        $data = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'status_lamaran' => $status_lamaran,
        );

        $where = array(
            'id_akun_pelamar' => $id_akun_pelamar
        );


        // update data
        $data1 = array(
            'id_akun_pelamar' => $id_akun_pelamar,
            'id_job' => $id_job,
            'berkas' => $berkas,
            'nilai_interview' => $nilai_interview,
        );

        $where1 = array(
            'id_akun_pelamar' => $id_akun_pelamar
        );

        $this->_sendWaHasil();
        $this->_sendEmailHasil();


        $this->m_pelamar->update_data($where, $data, 'pelamar');
        $this->m_pelamar->update_data($where1, $data1, 'penilaian');
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses</h4>
        Proses input nilai wawancara telah disimpan. Pelamar dapat melanjukan ke proses selanjutnya.
        </div>');
        redirect(base_url('interview/create-score/' . $id_akun_pelamar));
    }


    private function _sendWaHasil()
    {

        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');
        $no_wa = $this->input->post('no_wa');

        $tanggal_jadwal = $this->input->post('tanggal_jadwal');
        $jam_jadwal = $this->input->post('jam_jadwal');

        $nilai_interview = $this->input->post('nilai_interview');

        if ($nilai_interview >= 85) {
            $status = 'LOLOS';
            $desk = 'Selamat atas pencapaian anda, Kami selaku HRD PT BMI Makassar akan menghubungi anda secara Langsung Via WhatsApp atau Seluler';
        } else {
            $status = 'TIDAL LOLOS';
            $desk = 'Terims kasih telah mengikuti rangkaian rekrutmen PT BMI Makassar. Tetap semangat!';
        }

        $status_lamaran = $this->input->post('status_lamaran');

        // NOTIFIKASI WA
        $token = "r5-2#s!RR_b6umzdW4pm";
        $target = "62" . $no_wa;

        // $token = "r5-2#s!RR_b6umzdW4pm";
        // $target = "6282194460105";
        // r5-2#s!RR_b6umzdW4pm

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => '*Hasil Interview*

*' . $this->input->post('nama_lengkap') . '*, terima kasih telah mengikuti proses *TES INTERVIEW* dengan baik. Berdasarkan hasil *INTERVIEW* yang dilaksanakan pada tanggal *' . $tanggal_jadwal . '* bahwa *ANDA* dinyatakan *' . $status . '*

' . $desk . '. Atas perhatiannya kami ucapkan terima kasih.

Hati-hati terhadap penipuan, Kami dari PT BMI Makassar *Tidak Pernah* meminta biaya apapun dalam proses perekrutan karyawan.

Pesan ini dikirim secara otomatis oleh sistem.',
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: $token" //change TOKEN to your actual token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    private function _sendEmailHasil()
    {

        $id_akun_pelamar = $this->input->post('id_akun_pelamar');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat_email = $this->input->post('alamat_email');
        $no_wa = $this->input->post('no_wa');

        $tanggal_jadwal = $this->input->post('tanggal_jadwal');
        $jam_jadwal = $this->input->post('jam_jadwal');

        $status_lamaran = $this->input->post('status_lamaran');

        // NOTIFIKASI EMAIL
        $config =
            [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => 'bmimakassar01@gmail.com',
                'smtp_pass' => 'lsuljvqwismhvfxy',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"

            ];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        // end config

        $this->email->from('bmimakassar01@gmail.com', 'E-Rekrutmen PT BMI Makassar');
        $this->email->to($this->input->post('alamat_email'));


        $this->email->subject('Hasil Interview');
        $this->email->message('
   <h4 class="text-uppercase"> Dear ' . $nama_lengkap . ',</h4>

   <p style="text-align: justify;"> Salam Sejahtera, ' . $nama_lengkap . '. Kami mengundang anda untuk mengikuti TES INTERVIEW yang akan dilaksanakan pada tanggal' . $tanggal_jadwal . ' Pukul ' . $jam_jadwal . ' WITA
   di Kantor PT BMI Makassar dengan membawa berkas Asli yang telah diupload. Atas perhatiannya kami ucapakan terima kasih.</p>
   <br>
   <p style="text-align: justify; margin-top: 5px;">Pesan ini dikirim secara otomatis</p>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}

/* End of file Validasi.php */
