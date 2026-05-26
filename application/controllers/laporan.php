<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('login');
        }
    }

    // =========================
    // LAPORAN PEMINJAMAN
    // =========================
    public function peminjaman()
    {
        $bulan = $this->input->get('bulan');

        $this->db->select('peminjaman.*, anggota.nama');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id');

        if ($bulan) {
            $this->db->where('DATE_FORMAT(tanggal_pinjam,"%Y-%m") =', $bulan);
        }

        $data['data'] = $this->db->get()->result();
        $data['bulan'] = $bulan;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/peminjaman', $data);
        $this->load->view('templates/footer');
    }

    // =========================
    // LAPORAN BUKU
    // =========================
    public function buku()
    {
        $kategori = $this->input->get('kategori');

    $data['kategori'] = $this->db->get('kategori')->result();

    $this->db->select('buku.*, kategori.nama_kategori');
    $this->db->from('buku');
    $this->db->join('kategori', 'kategori.id = buku.kategori_id');

    if($kategori){
        $this->db->where('buku.kategori_id', $kategori);
    }

    $data['data'] = $this->db->get()->result();
    
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/buku', $data);
        $this->load->view('templates/footer');
    }
}