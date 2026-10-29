
<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "litera";

    private $conn = null;

    public function getConnection()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host .
                ";dbname=" . $this->db_name .
                ";charset=utf8mb4",
                $this->user,
                $this->password
            );

            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->conn->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch (PDOException $exception) {
            die("Koneksi database gagal.");
        }

        return $this->conn;
    }
}
