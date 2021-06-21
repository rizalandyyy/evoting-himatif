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
        $id = $this->session->userdata('id');
        $query = $this->db->get_where('tb_kampanye', array( //making selection
            'id_pemilih' => $id
        ));
        $datacek = $query->num_rows();

        if ($datacek == null) {
            $this->load->view('u_header');
            $this->load->view('u_pemilihan', $data);
            $this->load->view('u_footer');
        } else {
            $this->load->view('u_header');
            $this->load->view('u_rekapitulasi', $data);
            $this->load->view('u_footer');
        }
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

        $this->db->set('total_terpilih', 'total_terpilih+1', FALSE);
        $where = array('id_kandidat' => $kandidat);
        $this->db->where($where);
        $this->db->update('tb_kandidat');

        $data = array(
            'status_voting' => '1'
        );
        $where = array(
            'id_pemilih' => $pemilih
        );

        $this->m_data->update_data($where, $data, 'tb_pemilih');

        redirect('pemilihan');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('pemilihan');
    }
}