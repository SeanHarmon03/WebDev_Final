<?php
class Database {
    private string $host;
    private string $user;
    private string $password;
    private string $name;
    private ?PDO $conn = null;

    public function __construct(string $host = "localhost", string $user = "root", string $password = "Howimetyourmother2003!", string $name = "asc_motors") {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->name = $name;
    }

    public function connect(): void {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->name};charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): ?PDO {
        return $this->conn;
    }

    public function close(): void {
        $this->conn = null;
    }
}