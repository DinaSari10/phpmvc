<?php
class Guru_model
{

  private $table = 't_guru';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllGuru()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getGuruById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function ubahDataGuru($data)
  {
    $query = "UPDATE t_guru SET
              guru = :guru
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('guru', $data['guru']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function tambahDataGuru($data)
  {
    $query = "INSERT INTO t_guru VALUES('', :guru)";

    $this->db->query($query);
    $this->db->bind('guru', $data['guru']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusDataGuru($id)
  {
    $query = "DELETE FROM t_guru WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function cariDataGuru()
  {
    $keyword = $_POST['keyword'];
    $query = 'SELECT * FROM t_guru WHERE guru LIKE :keyword';
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}