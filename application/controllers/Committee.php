<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Committee extends CI_Controller
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
            redirect('panitia/login');
        }
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
        $data['kandidat'] = $this->m_data->tampilkandidat()->result_array();
        $this->load->view('v_kandidat', $data);
        $this->load->view('footer');
    }

    function delete($id)
    {
        $_id = $this->db->get_where('tb_kandidat', ['id_kandidat' => $id])->row();
        $query = $this->db->delete('tb_kandidat', ['id_kandidat' => $id]);

        redirect('committee/kandidat');
    }

    function detail($id)
    {
        $this->load->view('header');
        $where = array('id_kandidat' => $id);
        $data['kandidat'] = $this->m_data->edit_data($where, 'tb_kandidat')->result();
        $this->load->view('v_detailkandidat', $data);
        $this->load->view('footer');
    }

    function pemilih()
    {
        $this->load->view('header');
        $data['kandidat'] = $this->m_data->tampilkandidatpasif()->result_array();
        $this->load->view('v_pemilih', $data);
        $this->load->view('footer');
    }

    function aktif()
    {
        $this->load->view('header');
        $data['kandidat'] = $this->m_data->tampilkandidataktif()->result_array();
        $this->load->view('v_pemilih', $data);
        $this->load->view('footer');
    }
}