<?php
require_once("DL/config.php");

class Database
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    }

    public function getAll()
    {
        $sql = "SELECT id, nom, cognoms, email, alies, passwd FROM usuaris";
        return ($this->conn->query($sql));
    }

    public function getByName($username)
    {
        $sql = "SELECT * FROM usuaris WHERE alies = '$username'";
        return ($this->conn->query($sql));
    }


    public function insertUser($nom, $cognoms, $email, $alies, $passwd)
    {
        $sql = "INSERT INTO usuaris (nom, cognoms, email, alies, passwd) VALUES ('$nom', '$cognoms', '$email', '$alies', '$passwd')";
        return $this->conn->query($sql);
    }
}
?>
