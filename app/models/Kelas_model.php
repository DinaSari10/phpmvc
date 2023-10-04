<?php
class kelas_model
{

  private $table = 'kelas';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getALLkelas()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getkelasById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahDatakelas($data)
  {
    $query = "INSERT INTO kelas VALUES('', :kelas)";

    $this->db->query($query);
    $this->db->bind('kelas', $data['kelas']); 

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function hapusDatakelas($id)
  {
    $query = "DELETE FROM kelas WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahDataMahasiswa($data)
  {
    $query = "UPDATE kelas SET
              kelas = :kelas,
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('kelas', $data['kelas']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function cariDataMahasiswa()
  {
    $keyword = $_POST['keyword'];
    $query = 'SELECT * FROM kelas WHERE kelas LIKE :keyword';
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}