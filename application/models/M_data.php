<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function simpan_registrasi($nama, $nim, $kelas, $semester, $email, $alamat, $nomorhp, $username, $password, $gambar)
    {
        $hsl = $this->db->query("INSERT INTO tb_pemilih (username_pemilih, password_pemilih, nama_pemilih, nim_pemilih, kelas_pemilih,semester_pemilih, alamat_pemilih, email_pemilih, no_telp_pemilih, gambar_ktm, status_pemilih) VALUES ('$username','$password','$nama','$nim','$kelas','$semester','$alamat','$email','$nomorhp','$gambar','0')");
        return $hsl;
    }

    function simpan_panitia($username, $password, $nama, $divisi, $email)
    {
        $hsl = $this->db->query("INSERT INTO tb_panitia (nama_panitia, divisi_panitia, email_panitia, username_panitia, password_panitia,status_panitia) VALUES ('$nama','$divisi','$email','$username','$password','0')");
        return $hsl;
    }

    function simpan_post($nourut, $nama, $tempatlahir, $tanggallahir, $agama, $nim, $visi, $misi, $pengalaman, $kepanitiaan, $gambar)
    {
        $hsl = $this->db->query("INSERT INTO tb_kandidat (no_urut, nama_kandidat, tempat_lahir, tanggal_lahir, agama_kandidat, nim_kandidat, visi_kandidat, misi_kandidat, pengalaman_organisasi, pengalaman_kepanitiaan, gambar_kandidat) VALUES ('$nourut','$nama','$tempatlahir','$tanggallahir','$agama','$nim','$visi','$misi','$pengalaman','$kepanitiaan','$gambar')");
        return $hsl;
    }

    function simpan_vote($kandidat, $pemilih)
    {
        $hsl = $this->db->query("INSERT INTO tb_kampanye (id_kandidat, id_pemilih) VALUES ('$kandidat','$pemilih')");
        return $hsl;
    }

    function tampilkandidatpasif()
    {
        $this->db->where('status_pemilih', 0);
        return $this->db->get('tb_pemilih');
    }

    function tampilpanitiapasif()
    {
        $this->db->where('status_panitia', 0);
        return $this->db->get('tb_panitia');
    }

    function tampilpanitiaaktif()
    {
        $this->db->where('status_panitia', 1);
        return $this->db->get('tb_panitia');
    }

    function tampilkandidataktif()
    {
        $this->db->where('status_pemilih', 1);
        return $this->db->get('tb_pemilih');
    }

    function tampilkandidat()
    {
        return $this->db->get('tb_kandidat');
    }
}