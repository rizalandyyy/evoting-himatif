<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function validateUser($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('tb_user');
        return $result;
    }

    public function validatePengelola($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('tb_pengelola');
        return $result;
    }
}