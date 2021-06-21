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
        if (!$this->session->userdata('logged_in_pemilih')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['kandidat'] = $this->m_data->tampilkandidat()->result_array();
        $this->load->view('u_header');
        $this->load->view('u_pemilihan', $data);
        $this->load->view('u_footer');
    }

    public function detail($id)
    {
        $where = array('id_kandidat' => $id);
        $data['kandidat'] = $this->m_data->edit_data($where, 'tb_kandidat')->result();
        $this->load->view('u_header');
        $this->load->view('u_detailkandidat', $data);
        $this->load->view('u_footer');
    }

    public function vote()
    {
        $kandidat = $this->input->post('id_kandidat');
        $pemilih = $this->input->post('id_pemilih');

        $this->m_data->simpan_vote($kandidat, $pemilih); //simpan artikel ke database
        redirect('pemilihan');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('pemilihan');
    }
}