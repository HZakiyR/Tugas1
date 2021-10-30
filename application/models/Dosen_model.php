<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('dosen')->result_array();
    }
    public function getDsnById($id)
    {
        $dosen = $this->getAll();

        foreach ($dosen as $dsn) {
            if ($dsn['id'] == $id) {
                return $dsn;
            }
        }
    }
    public function insertData($data)
    {
        return $this->db->insert('dosen', $data);
    }
    public function deleteData($id)
    {
        return $this->db->delete('dosen', ['id' => $id]);
    }
}
