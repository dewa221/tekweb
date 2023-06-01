<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
      // Daftar anggota kelompok
      $data['anggota'] = array(
          array('nama' => 'Haris Umam Satria', 'id' => '1', 'nim' => '3411201072'),
          array('nama' => 'Anggota 2', 'id' => '2', 'nim' => '3411201078'),
          array('nama' => 'Anggota 3', 'id' => '3', 'nim' => '3411201073'),
          array('nama' => 'Anggota 4', 'id' => '4', 'nim' => '3411201059')
      );
  
      $this->load->view('anggota/daftar_anggota', $data);
  }
  
  public function biodata($id) {
      // Biodata anggota
      $data['anggota'] = array(
          array('id' => '1', 'nama' => 'Haris Umam Satria', 'alamat' => 'Padalarang', 'tanggal lahir' => '22 Desember 2001', 'nim' => '3411201072', 'gambar' => '1.jpg'),
          array('id' => '2', 'nama' => 'Taris Monica', 'alamat' => 'Bandung', 'tanggal lahir' => '19 Januari 2002', 'nim' => '3411201078', 'gambar' => '2.jpg'),
          array('id' => '3', 'nama' => 'Dimas Dewa', 'alamat' => 'Soreang', 'tanggal lahir' => '05 November 2002', 'nim' => '3411201073', 'gambar' => '3.jpg'),
          array('id' => '4', 'nama' => 'Hani Arum Pertiwi', 'alamat' => 'Subang', 'tanggal lahir' => '22 Mei 2001', 'nim' => '3411201059', 'gambar' => '4.jpg')
      );
  
      // Cari anggota berdasarkan ID
      $data['detail_anggota'] = array();
      foreach ($data['anggota'] as $anggota) {
          if ($anggota['id'] == $id) {
              $data['detail_anggota'] = $anggota;
              break;
          }
      }
  
      $this->load->view('/anggota/biodata_anggota', $data);
  }
  
  
}
