<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
        $this->load->model('m_data');
        $this->load->library('upload');
    }

    public function index()
    {
        $this->load->view('registrasi');
    }

    function proses()
    {
        $config['upload_path'] = './assets/ktm/'; //path folder
        $config['allowed_types'] = '*'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload

        $this->upload->initialize($config);
        if (!empty($_FILES['foto_ktm']['name'])) {
            if ($this->upload->do_upload('foto_ktm')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/ktm/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['new_image'] = './assets/ktm/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name']; //ambil nama file yang terupload enkripsi
                $nama = $this->input->post('nama');
                $nim = $this->input->post('nim');
                $kelas = $this->input->post('kelas');
                $semester = $this->input->post('semester');
                $email = $this->input->post('email');
                $alamat = $this->input->post('alamat');
                $nomorhp = $this->input->post('nomorhp');
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $this->m_data->simpan_registrasi($nama, $nim, $kelas, $semester, $email, $alamat, $nomorhp, $username, $password, $gambar); //simpan artikel ke database
                redirect('login');
            } else {
                //redirect ke blog jika gambar gagal upload
                redirect('registrasi');
            }
        } else {
            //redirect ke blog jika gambar kosong
            redirect('registrasi');
        }
    }
}