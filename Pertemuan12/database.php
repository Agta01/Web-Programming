<?php
// Mengelola koneksi ke database 
class Database
{
    // Properti untuk menyimpan nama host, nama pengguna, password, nama database, dan koneksi
    private $host = "localhost";  
    private $username = "root"; 
    private $password = ""; 
    private $database = "prakwebdb"; 
    public $conn; 

    // Konstruktor untuk inisialisasi koneksi ke database 
    public function __construct()
    {
        // Membuat objek koneksi mysqli
        $this->conn = new mysqli($this -> host, $this -> username, $this -> password, $this->database);

        // Melakukan pengecekan apakah terjadi error
        if ($this -> conn -> connect_error) {
            die("connection failed: " . $this -> conn -> connect_error);
        }
    }
}
?>