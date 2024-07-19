<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_app extends CI_Model
{

    public function tampil_job()
    {
        $this->db->from('job_vacancy');
        return $this->db->get()->result();
    }

    public function tampil_info()
    {
        $this->db->from('pengumuman');
        return $this->db->get()->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}

/* End of file M_app.php */
