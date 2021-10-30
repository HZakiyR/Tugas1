<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
  // public function getAll()
  // {
  //   return [
  //     [
  //       'id_matakuliah' => 1,
  //       'kd_matakuliah' => 'U05302007',
  //       'nm_matakuliah' => 'Kemuhammadiyahan',
  //       'sks' => "3"
  //     ],
  //     [
  //       'id_matakuliah' => 2,
  //       'kd_matakuliah' => 'U05302008',
  //       'nm_matakuliah' => 'Kewirausahaan',
  //       'sks' => "3"
  //     ],
  //     [
  //       'id_matakuliah' => 3,
  //       'kd_matakuliah' => '05302014',
  //       'nm_matakuliah' => 'Grafika Komputer',
  //       'sks' => "2"
  //     ],
  //     [
  //       'id_matakuliah' => 4,
  //       'kd_matakuliah' => '05302012',
  //       'nm_matakuliah' => 'Aljabar Vektor',
  //       'sks' => "3"
  //     ],
  //     [
  //       'id_matakuliah' => 5,
  //       'kd_matakuliah' => '05302013',
  //       'nm_matakuliah' => 'Statistika',
  //       'sks' => "2"
  //     ],
  //     [
  //       'id_matakuliah' => 6,
  //       'kd_matakuliah' => '05302016',
  //       'nm_matakuliah' => 'Sistem Operasi',
  //       'sks' => "3"
  //     ],
  //     [
  //       'id_matakuliah' => 7,
  //       'kd_matakuliah' => '05302015',
  //       'nm_matakuliah' => 'Struktur Data',
  //       'sks' => "2"
  //     ],
  //     [
  //       'id_matakuliah' => 8,
  //       'kd_matakuliah' => '05302018',
  //       'nm_matakuliah' => 'Pemograman Web II',
  //       'sks' => "3"
  //     ],
  //     [
  //       'id_matakuliah' => 9,
  //       'kd_matakuliah' => '05302017',
  //       'nm_matakuliah' => 'Teori Graf dan Otomata',
  //       'sks' => "2"
  //     ],
  //     [
  //       'id_matakuliah' => 10,
  //       'kd_matakuliah' => '051010005',
  //       'nm_matakuliah' => 'Dasar Pemograman',
  //       'sks' => "3"
  //     ],
  //   ];
  // }

  public function getAll()
  {
    return $this->db->get('matakuliah')->result_array();
  }
  public function getMhsById($id)
  {
    $mahasiswa = $this->getAll();

    foreach ($mahasiswa as $mhs) {
      if ($mhs['id_matakuliah'] == $id) {
        return $mhs;
      }
    }
  }
  public function insertData($data)
  {
    return $this->db->insert('matakuliah', $data);
  }
  public function deleteData($id)
  {
    return $this->db->delete('matakuliah', ['id_matakuliah' => $id]);
  }
}
