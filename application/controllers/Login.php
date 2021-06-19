<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
        $this->load->model('m_data');
    }

    public function index()
    {
        $this->load->view('u_header');
        $this->load->view('u_login');
        $this->load->view('u_footer');
    }

    public function admin()
    {
        $this->load->view('av_login');
    }

    public function proses()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $status = '1';
        $validate = $this->m_login->validateUser($username, $password, $status);

        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $nama = $data['nama_pemilih'];
            $nim = $data['nim_pemilih'];
            $kelas = $data['kelas_pemilih'];
            $semester = $data['semester_pemilih'];
            $alamat = $data['alamat_pemilih'];
            $email = $data['email_pemilih'];
            $notelp = $data['no_telp_pemilih'];

            $sesdata = array(
                'nama'  => $nama,
                'nim'  => $nim,
                'kelas'  => $kelas,
                'semester'  => $semester,
                'alamat'  => $alamat,
                'email'  => $email,
                'notelp'  => $notelp,
                'logged_in_user' => TRUE
            );

            $this->session->set_userdata($sesdata);

            redirect('pemilihan');
        } else {
            $data['wrong'] = "Akun belum terverifikasi / Pastikan username dan password Anda benar";
            $this->load->view('u_login', $data);
        }
    }

    public function auth()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $validate = $this->m_login->validateAdmin($username, $password);

        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $sesdata = array(
                'username'  => 'admin',
                'logged_in_user' => TRUE
            );

            $this->session->set_userdata($sesdata);

            redirect('Admin');
        } else {
            $data['wrong'] = "Akun belum terverifikasi / Pastikan username dan password Anda benar";
            $this->load->view('av_login', $data);
        }
    }
}