<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemilihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->logged_in();
        $this->load->library('form_validation');
        $this->load->model('m_login');
        $this->load->model('m_data');
        $this->load->library('upload');
    }

    private function logged_in()
    {
        if (!$this->session->userdata('logged_in_user')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['kandidat'] = $this->m_data->tampilkandidat()->result_array();
        $this->load->view('u_pemilihan', $data);
    }

    public function detail($id)
    {
        $where = array('id_kandidat' => $id);
        $data['kandidat'] = $this->m_data->edit_data($where, 'tb_kandidat')->result();
        $this->load->view('u_detailkandidat', $data);
    }
}