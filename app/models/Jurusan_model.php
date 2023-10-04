<?php

class Jurusan_model {
   private $table = 'jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


   public function getAlljurusan()
   {
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
   }

   public function getjurusanById($id)
   {
     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
     $this->db->bind('id', $id);
     return $this->db->single();
   }

   public function tambahDatajurusan($data)
   {
    $query = "INSERT INTO jurusan
    VALUES 
    ('', :nama)";


      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      
      $this->db->execute();

      return $this->db->rowCount();
    }

  public function ubahDatajurusan($data)
  {
    $query = "UPDATE jurusan SET
              nama = :nama,
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }
    public function hapusDatajurusan($id)
    {
      $query = "DELETE FROM jurusan WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);
  
      $this->db->execute();
  
      return $this->db->rowCount();
    }
  

}