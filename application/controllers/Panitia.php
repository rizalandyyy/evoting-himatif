<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panitia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
        $this->load->model('m_data');
    }

    public function login()
    {
        $this->load->view('v_panitialogin');
    }

    public function registrasi()
    {
        $this->load->view('v_panitiaregister');
    }

    public function signup()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $divisi = $this->input->post('divisi');
        $email = $this->input->post('email');
        $this->m_data->simpan_panitia($username, $password, $nama, $divisi, $email);
?>
<script type="text/javascript">
alert("Selamat Anda Telah Terdaftar. Silahkan login terlebih dahulu untuk ke halaman dashboard.")
</script>
<?php
        redirect('panitia/login');
    }
}