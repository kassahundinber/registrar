<?php
class DbConnection
{
 private $host = "localhost";
 private $db = "registrar7";
 private $username = "root";
 private $password = "";
 public function connect()
 {
 try {
 $pdo = new PDO("mysql:host=" . $this->host . ";dbname:" . $this->db, $this->username, $this->password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 return $pdo;
 } catch (PDOException $e) {
 die("ERROR: Could not connect. " . $e->getMessage());
 }
 }
}
