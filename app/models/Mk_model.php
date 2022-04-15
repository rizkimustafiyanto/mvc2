<?php

class Mk_model
{
    private $table = 'mk_mhs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMkById($id_mk)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mk=:id_mk');
        $this->db->bind('id_mk', $id_mk);
        return $this->db->single();
    }

    public function tambahDataMk($data)
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

    public function hapusDataMk($id_mk)
    {
        $query = "DELETE FROM mk_mhs WHERE id_mk = :id_mk";

        $this->db->query($query);
        $this->db->bind('id_mk', $id_mk);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMk($data)
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


    public function cariDataMk()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mk_mhs WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
