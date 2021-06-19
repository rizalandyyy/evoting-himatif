<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function validatePanitia($username, $password, $status)
    {
        $this->db->where('username_panitia', $username);
        $this->db->where('password_panitia', $password);
        $this->db->where('status_panitia', $status);
        $result = $this->db->get('tb_panitia');
        return $result;
    }

    public function validateUser($username, $password, $status)
    {
        $this->db->where('username_pemilih', $username);
        $this->db->where('password_pemilih', $password);
        $this->db->where('status_pemilih', $status);
        $result = $this->db->get('tb_pemilih');
        return $result;
    }

    public function validatePengelola($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('tb_pengelola');
        return $result;
    }

    public function validateAdmin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('tb_admin');
        return $result;
    }
}