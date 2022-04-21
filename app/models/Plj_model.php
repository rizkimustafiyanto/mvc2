<?php

class Plj_model
{
    private $table = 'mk_mhs mkk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPlj()
    {
        $this->db->query('SELECT mkk.* FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPljById($id_mk)
    {
        $this->db->query('SELECT mkk.* FROM ' . $this->table . 'INNER JOIN mahasiswa mh ON mh.id_mhs = mkk.id_mhs WHERE id_mkk.mk=:id_mk');
        $this->db->bind('id_mk', $id_mk);
        return $this->db->single();
    }

    public function tambahDataPlj($data)
    {
        $query = "INSERT INTO mk_mhs
                    VALUES
                  (null, :nama, :id_mhs)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_mhs', $data['id_mhs']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPlj($id_mk)
    {
        $query = "DELETE FROM mk_mhs WHERE id_mk = :id_mk";

        $this->db->query($query);
        $this->db->bind('id_mk', $id_mk);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPlj($data)
    {
        $query = "UPDATE mk_mhs SET
                    nama = :nama,
                    id_mhs = :id_mhs
                  WHERE id_mk = :id_mk";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_mhs', $data['id_mhs']);
        $this->db->bind('id_mk', $data['id_mk']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataPlj()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mk_mhs WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
