<?php
require_once 'Database.php'; // Memasukkan file Database.php 

class Crud
{
    private $db; // Properti menyimpan objek Database untuk koneksi dengan access private

    // Konstruktor untuk inisialisasi objek Database 
    public function __construct()
    {
        $this->db = new Database(); 
    }

    // Create: Menambahkan data jabatan baru ke dalam database
    public function create($jabatan, $keterangan)
    {
        // Query untuk menambahkan data baru ke dalam tabel 'jabatan'
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $result = $this->db->conn->query($query); 
        return $result; 
    }

    // Read, fungsi yang digunakan untuk membaca semua data jabatan 
    public function read()
    {
        // Query untuk read semua data dari tabel dengan nama 'jabatan'
        $query = "SELECT * FROM jabatan";
        $result = $this->db->conn->query($query); 

        $data = []; 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row; 
            }
        }
        return $data; 
    }

    // Read By Id, fungsi yang digunakan untuk membaca data jabatan berdasarkan ID 
    public function readById($id)
    {
        // Query untuk read semua data tabel jabatan berdasarkan ID
        $query = "SELECT * FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query); 
        if ($result->num_rows == 1) {
            return $result->fetch_assoc(); 
        } else {
            return null;
        }
    }

    // Update, fungsi yang digunakan untuk memperbarui data jabatan berdasarkan ID 
    public function update($id, $jabatan, $keterangan)
    {
        // Query untuk memperbarui data jabatan
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = $id";
        $result = $this->db->conn->query($query); 

        return $result;
    }

    // Delete, fungsi yang digunakan untuk menghapus data jabatan berdasarkan ID 
    public function delete($id)
    {
        // Query untuk menghapus data jabatan berdasarkan ID
        $query = "DELETE FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query); 
    }
}
?>