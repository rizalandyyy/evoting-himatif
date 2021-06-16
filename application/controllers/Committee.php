<?php
defined('BASEPATH') or exit('No direct script access allowed');

class committee extends CI_Controller
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
        $this->load->view('header');
        $this->load->view('v_panitia');
        $this->load->view('footer');
    }

    public function add()
    {
        $this->load->view('header');
        $this->load->view('v_panitiatambahkandidat');
        $this->load->view('footer');
    }

    public function proses()
    {
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = '*'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name']; //ambil nama file yang terupload enkripsi
                $nourut = $this->input->post('nourut');
                $nama = $this->input->post('nama');
                $tempatlahir = $this->input->post('tempatlahir');
                $tanggallahir = $this->input->post('tanggallahir');
                $agama = $this->input->post('agama');
                $nim = $this->input->post('nim');
                $visi = $this->input->post('visi');
                $misi = $this->input->post('misi');
                $pengalaman = $this->input->post('pengalaman');
                $kepanitiaan = $this->input->post('kepanitiaan');

                $this->m_data->simpan_post($nourut, $nama, $tempatlahir, $tanggallahir, $agama, $nim, $visi, $misi, $pengalaman, $kepanitiaan, $gambar); //simpan artikel ke database
                redirect('committee/kandidat');
            } else {
                //redirect ke blog jika gambar gagal upload
                redirect('committee/error');
            }
        } else {
            //redirect ke blog jika gambar kosong
            redirect('committee/kandidat');
        }
    }

    public function kandidat()
    {
        $this->load->view('header');
        $this->load->view('v_kandidat');
        $this->load->view('footer');
    }
}