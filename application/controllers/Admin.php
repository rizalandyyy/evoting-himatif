<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        if (!$this->session->userdata('logged_in_useradmin')) {
            redirect('login/admin');
        }
    }

    public function index()
    {
        $this->load->view('av_header');
        $this->load->view('av_admin');
        $this->load->view('av_footer');
    }

    public function inactive()
    {
        $this->load->view('av_header');
        $data['panitia'] = $this->m_data->tampilpanitiapasif()->result_array();
        $this->load->view('av_inactive', $data);
        $this->load->view('av_footer');
    }

    function verifikasi()
    {
        $status = $this->input->post('status');
        $id = $this->input->post('id');
        $data = array(
            'status_panitia' => $status
        );

        $where = array(
            'id_panitia' => $id
        );

        $this->m_data->update_data($where, $data, 'tb_panitia');
        redirect('admin/inactive');
    }

    public function active()
    {
        $this->load->view('av_header');
        $data['panitia'] = $this->m_data->tampilpanitiaaktif()->result_array();
        $this->load->view('av_active', $data);
        $this->load->view('av_footer');
    }

    function unverifikasi()
    {
        $status = $this->input->post('status');
        $id = $this->input->post('id');
        $data = array(
            'status_panitia' => $status
        );

        $where = array(
            'id_panitia' => $id
        );

        $this->m_data->update_data($where, $data, 'tb_panitia');
        redirect('admin/active');
    }

    public function kandidat()
    {
        $this->load->view('av_header');
        $data['kandidat'] = $this->m_data->tampilkandidat()->result_array();
        $this->load->view('av_kandidat', $data);
        $this->load->view('av_footer');
    }

    function delete($id)
    {
        $_id = $this->db->get_where('tb_kandidat', ['id_kandidat' => $id])->row();
        $query = $this->db->delete('tb_kandidat', ['id_kandidat' => $id]);

        redirect('admin/kandidat');
    }

    function detail($id)
    {
        $this->load->view('av_header');
        $where = array('id_kandidat' => $id);
        $data['kandidat'] = $this->m_data->edit_data($where, 'tb_kandidat')->result();
        $this->load->view('av_detailkandidat', $data);
        $this->load->view('av_footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
}