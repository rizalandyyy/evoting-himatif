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

    public function index()
    {
        $this->load->view('v_panitialogin');
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

    public function signin()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $status = '1';
        $validate = $this->m_login->validatePanitia($username, $password, $status);

        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $nama = $data['nama_panitia'];
            $divisi = $data['divisi_panitia'];
            $email = $data['email_panitia'];
            $username = $data['username_panitia'];
            $status = $data['status_panitia'];

            $sesdata = array(
                'nama'  => $nama,
                'divisi'  => $divisi,
                'email'  => $email,
                'username'  => $username,
                'status'  => $status,
                'logged_in_user' => TRUE
            );

            $this->session->set_userdata($sesdata);

            redirect('committee');
        } else {
            $data['wrong'] = "Akun belum terverifikasi / Pastikan username dan password Anda benar";
            $this->load->view('v_panitialogin', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('panitia');
    }
}