    <?php
class Anggota_model extends CI_Model {
  public function getAllAnggota() {
    // Mengambil semua data anggota dari tabel anggota
    $query = $this->db->get('anggota');
    return $query->result();
  }

  public function getAnggotaById($id) {
    // Mengambil data anggota berdasarkan ID
    $query = $this->db->get_where('anggota', array('id' => $id));
    return $query->row();
  }
}
?>
