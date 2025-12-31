<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model 
{

    /**
     * Get All Data siswa
     */
    public function get_all()
    {
        $get_siswa = $this->db->select("*")
                    ->from('tbl_siswa')
                    ->order_by('id_siswa', 'DESC')
                    ->get();
        
        return $get_siswa;
    }

    /**
     * Method Simpan Data siswa
     */
    public function simpan_siswa($data) 
    {
        $simpan = $this->db->insert("tbl_siswa", $data);

        if($simpan) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Detail Data Siswa
     */
    public function detail_siswa($id_siswa)
    {
        $get_detail = $this->db->select("*")
                    ->from('tbl_siswa')
                    ->where('id_siswa', $id_siswa)
                    ->get();
        
        return $get_detail;
    }

    /**
     * Update Data siswa
     */
    public function update_siswa($data, $id)
    {
        $update = $this->db->update('tbl_siswa', $data, $id);

        if($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /**
     * Delete Data siswa
     */
    public function delete_siswa($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $delete = $this->db->delete('tbl_siswa');

        if($delete) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}